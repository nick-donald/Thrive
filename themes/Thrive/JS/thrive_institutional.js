var ThriveInstitutional = ThriveInstitutional || {};

ThriveInstitutional.app = function() {

	String.prototype.format = function() {
		var args = arguments;
		return this.replace(/{(\d+)}/g, function(match, number) {
			return typeof args[number] != 'undefined' ?
				args[number] :
				match;
		});
	};

	String.prototype.capitalize = function() {
		return this.charAt(0).toUpperCase() + this.slice(1);
	};

	var regionalRepInfo = {
		southeast: {
			Representative: "Chris Dreska",
			Phone: "404-932-8257",
			Email: "cdreska@thriveicecream.com"
		},
		south: {
			Representative: "Jeff Holtz",
			Phone: "501-281-0177",
			Email: "jholtz@thriveicecream.com"
		},
		northeast: {
			Representative: "Frank Everett",
			Phone: "401-662-1542",
			Email: "feverett@thriveicecream.com"
		},
		florida: {
			Representative: "Nathan Everett",
			Phone: "203-581-1478",
			Email: "neverett@thriveicecream.com"
		},
		midwest: {
			Representative: "Raine Holly",
			Phone: "479-381-7500",
			Email: "rholly@thriveicecream.com"
		}
	};

	var w = $(window), m = $("#inst-marquee"), clicked = 0;
	var toolTip = $('#map-tooltip');

	var testScroll = function(e) {
		if (e.which === 39) {
			scrollRight();
		} else if (e.which === 37) {
			scrollLeft();
		}
	};

	var scrollToEl = function(el) {
		var top = $(el).offset().top;
		$("body, html").animate({ scrollTop: top });
	};

	var setMarqueeSize = function(condition) {
		var styleString = '', wWidth = w.width();
		wWidth > 600 ? styleString = ".last { left: " + -wWidth + "px; }\n.next{ left: " + wWidth + "px; }\n" : 
			styleString = ".last { -webkit-transform: translateX(" + -wWidth + "px); }\n.next{ -webkit-transform: translateX(" + wWidth + "px); }\n";
		var style = document.createElement('style');
		style.type = "text/css";

		if (style.styleSheet) {
			style.styleSheet.cssText = styleString;
		} else {
			style.appendChild(document.createTextNode(styleString));
		}
		$(style).addClass("inst-marquee-widths");

		condition ? $('head').append(style) : $('.inst-marquee-widths').html(style);

		$(".marquee-content").css({ width: wWidth });
	};

	var showRegionRep = function() {
		var $this, id, $regionInfo = $(".region-info-desc");
		$this = $(this);

		$('html').hasClass('svg') ? id = $this.attr("id") : id = $this.val();

		$(".region-info-title").text(id.capitalize() + " Region");
		$regionInfo.html("");

		for (prop in regionalRepInfo[id]) {
			if (prop === "Email") {
				var emailStr = '<a href="mailto:' + regionalRepInfo[id][prop] + '">' + regionalRepInfo[id][prop] + '</a>';
				var insertStr = '<span class="region-info-item"><strong>' + prop + ":</strong> " + emailStr + '</span>';
			} else {
				var insertStr = '<span class="region-info-item"><strong>' + prop + ":</strong> " + regionalRepInfo[id][prop] + '</span>';
			}
			$regionInfo.append(insertStr);
		}
	};

	var setEventListeners = function() {

		$("#scroll-carrot").click(function() {
			scrollToEl("#inst-about-container");
		});

		var resizeTimeout;
		w.resize(function() {
			clearTimeout(resizeTimeout);
			resizeTimeout = setTimeout(function() {
				setMarqueeSize(false)
				if (w.width() < 600) {
					mobileEvents();
				}
			}, 200);
		});

		$(".region").on("click", showRegionRep);

		w.on("load", function() {
			setTimeout(cupShow, 3000);
		});

		$("#marquee-left").click(function() {
			clearInterval(ThriveInstitutional.marqueeInterval);
			scrollLeft();
		});

		$("#marquee-right").click(function() {
			clearInterval(ThriveInstitutional.marqueeInterval);
			scrollRight();
		});

		$("#inst-form").on("submit", function(e) {
			e.preventDefault();

			var emailInput = $("#2_element13");
			if ( verifyEmail(emailInput.val()) ) {
				var formData = new FormData(document.getElementById("inst-form"));
				$.ajax({
					url: "/about/institutional",
					data: formData,
					processData: false,
					contentType: false,
					type: "POST",
					beforeSend: function() {
						$("#inst-form").remove();
						$("#inst-form-title").remove();
						$("#form-sending").show();
					},
					complete: function() {
						$("#form-sending").remove();
						$("#inst-opt-in").html("Thanks we'll be in touch soon!");
						$("#overlay").hide();
						setTimeout(function () {
							$("#inst-opt-in").fadeOut();
						},6000);
					}
				});
				console.log(formData);
			} else {
				emailInput.focus();
				emailInput.val("");
				$(".warning i").css({display: "inline"});
			}
		});

		$("#2_element13").on("blur", function(e) {
			checkEmail(e, $(this));
		});

		$("#inst-opt-in").click(showOptIn);

		$("#inst-form-exit").click(exitInstForm);

		$("#overlay").click(exitInstForm);

		$(".table-link").click(function(e) {
			e.preventDefault();
		});

		if (!$('html').hasClass('svg')) {
			$('#svg-alt-select').change(showRegionRep);
		};
		
		if (w.width() < 600) {
			mobileEvents();
		}
	};

	var mobileEventsReset = function() {
		Hammer(document.getElementById('inst-marquee-overlay')).off('dragstart drag dragend');
		mobileEvents();
	}

	var hammerEvents = {
		dragstartEl: Hammer(document.getElementById('inst-marquee-overlay')),
		dragstartOn: function(callback) {
			this.dragstartEl.on('dragstart', callback);
		},
		dragStartOff: function(callback) {
			this.dragstartEl.on('dragstart', null);
		}
	};

	var mobileEvents = function() {
		var $active, $next, $prev, width = $(window).width();
		var dragStart = function(e) {
			$active = $('.active');
			// $active.css("z-index", 1000);
			if (e.gesture.direction === 'left') {
				$next = $('.next').eq(0);
			} else {
				$next = $('.last').last();
			}
		};

		var drag = function(e) {
			$active.css("-webkit-transform", "translateX(" + e.gesture.deltaX + "px)");
			if (e.gesture.direction === 'left') {
				$next.css("-webkit-transform", "translateX(" + ( width + e.gesture.deltaX ) + "px)");
			} else if (e.gesture.direction === 'right') {
				$next.css("-webkit-transform", "translateX(" + ( -width + e.gesture.deltaX ) + "px)");
			}
		};

		var dragEnd = function(e) {
			$active.addClass('mobile-transition');
			$next.addClass('mobile-transition');
			var absDeltaX = Math.abs(e.gesture.deltaX), dir = e.gesture.direction;

			if ((absDeltaX > width / 4) && (dir === 'left')) { // Swiped more than halway to the left
				$active.css("-webkit-transform", "translateX(" + (-width) + "px)");
				$next.css("-webkit-transform", "translateX(0)");
			} else if ((absDeltaX < width / 4) && (dir === 'left')) { // Swiped less than halfway to the left
				$active.css("-webkit-transform", "translateX(0)");
				$next.css("-webkit-transform", "translateX(" + width + "px)");
			} else if ((absDeltaX > width / 4) && (dir === 'right')) { // Swiped more than halway to the right
				$active.css("-webkit-transform", "translateX(" + (width) + "px)");
				$next.css("-webkit-transform", "translateX(0)");
			} else if ((absDeltaX < width / 4) && (dir === 'right')) { // Swiped less than halway to the right
				$active.css("-webkit-transform", "translateX(0)");
				$next.css("-webkit-transform", "translateX(" + -width + "px)");
			}

			setTimeout(function() {
				if ((absDeltaX > width / 4) && (dir === 'left')) {
					$active.addClass('last').removeClass('active next');
					$next.addClass('active').removeClass('next');
					checkIfLastR();
					
				} else if ((absDeltaX > width / 4) && (dir === 'right')) {
					$active.addClass('next').removeClass('last').removeClass('active');
					$next.addClass('active').removeClass('last');
					checkIfLastL();
				}
				// $active.removeClass('mobile-transition');
				// $next.removeClass('mobile-transition');
				$('.marquee-content').removeClass('mobile-transition');
				$('.marquee-content').css("-webkit-transform", "");
				$('body').off('webkitTransitionEnd');
				Hammer(document.getElementById('inst-marquee-overlay')).off('dragstart', dragStart);
				Hammer(document.getElementById('inst-marquee-overlay')).off('drag', drag);
				Hammer(document.getElementById('inst-marquee-overlay')).off('dragend', dragEnd);
				mobileEvents();
			}, 250);
		}

		hammerEvents.dragstartOn(dragStart);

		Hammer(document.getElementById('inst-marquee-overlay')).on('drag', drag);

		Hammer(document.getElementById('inst-marquee-overlay')).on('dragend', dragEnd);

		$(window).on('load', function() {
			$('#mobile-swipe-reminder').show();
			$('#inst-marquee').addClass('reminder-active');
			setTimeout(function() {
				$('#inst-marquee').removeClass('reminder-active');
			},2500); 
		});
	};

	var cupShow = function() {
		var $prev = $('.top-cup').prev();
		$(".top-cup").fadeOut("fast", function() {
			$(this).removeClass("top-cup");
			$(this).css({display: "inline-block"});
			if ($prev.length >= 1) {
				$prev.addClass("top-cup");
			} else {
				$(".inst-cup:last-child").addClass("top-cup");
			}
		});
		setTimeout(cupShow, 3000);
	};

	var exitInstForm = function(e) {
		switch ($(e.target).attr("id")) {
			case "overlay":
				$("#overlay").hide();
				break;

			case "inst-contact-container":
				$("#overlay").hide();
				break;

			case "inst-form-exit":
				$("#overlay").hide();
				break;
		}
	}

	var checkEmail = function(e, that) {
		if (!verifyEmail(that.val())) {
			that.val("");
			$(".warning i").css({display: "inline"});
		} else {
			$(".warning i").css({display: "none"});
			$("#4_element_submit13").removeAttr("disabled");
		}
	};

	var showOptIn = function(e) {
		e.preventDefault();

		showOverlay();
	};

	var showOverlay = function() {
		$("#overlay").show();
	};

	var verifyEmail = function(email) {
		return /^([a-z0-9A-Z._%+-]+)@([^\W_][A-Za-z0-9-\.]+[^\.^-]+)\.{1}[a-zA-Z]{2,6}$/.test(email);
	};

	(function initializeMarquee() {
		setMarqueeSize(true);
	}());

	var scrollRight = function() {
		var slides = $(".marquee-content");
		var currActive = $(".active");

		if (!Modernizr.csstransitions) {
			currActive.next().addClass("next-active");
			$(".active, .next-active").animate({ 
				left: "-=" + w.width()
			}, function() {
				currActive.removeClass("active").addClass("last");
				$(".next-active").removeClass("next-active next").addClass("active");
				$(".marquee-content").css("left", "");
				checkIfLastR();
			});
		} else {

			slides.addClass("transition");
			
			$(".active").next().addClass("active").removeClass("next");
			currActive.addClass("last").removeClass("active");

			$(".active").on("webkitTransitionEnd oTransitionEnd otransitionend transitionend msTransitionEnd", function() {
				checkIfLastR();
				slides.removeClass("transition");
			});
		}
	};

	var checkIfLastR = function() {
		if ($(".dup").hasClass("active")) {
			$(".first").addClass("active").removeClass("last");
			$(".first").siblings().addClass("next").removeClass("active").removeClass("last");
			$(".pre").removeClass("next").addClass("last");
			// $(".dup").removeClass("active");
			// return true;
		}
	};

	var scrollLeft = function() {
		var currActive = $(".active");
		var slides = $(".marquee-content");

		if (!Modernizr.csstransitions) {
			currActive.prev().addClass("next-active");
			$(".active, .next-active").animate({ 
				left: "+=" + w.width()
			}).promise().done(function() {
				currActive.removeClass("active").addClass("next");
				$(".next-active").removeClass("next-active last").addClass("active");
				$(".marquee-content").css("left", "");
				checkIfLastL();
			});
		} else {
			slides.addClass("transition");
			
			$(".active").prev().addClass("active").removeClass("last");
			currActive.addClass("next").removeClass("active");

			$(".active").on("transitionend", function() {
				checkIfLastL();
				slides.removeClass("transition");
			});
		}
	};

	var checkIfLastL = function() {
		if ($(".pre").hasClass("active")) {
			$(".dup").siblings().addClass("last").removeClass("active").removeClass("next");
			$(".post").addClass("active").removeClass("next last");
		}
	};

	var roundCornerBack = function() {
		var currActive = $(".active");
		var slides = $(".marquee-content");
		slides.attr("style", "");

		$(".next").removeClass("next");
		$(".first").removeClass("active");
		$(".dup").addClass("active").siblings().addClass("last");

		// currActive = $(".active");
	};

	setEventListeners();

}

$(document).ready(function() {
	new ThriveInstitutional.app;
});