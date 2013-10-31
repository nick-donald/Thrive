var thriveMasterSettings, thriveHomePageSettings, thriveProductsSettings, thriveFindSettings, thriveFAQSettings,
thriveLoaderSettings, thriveMobileSettings;

var ThriveMaster = {
	settings: function() {
		return {
			mapSidebarForm: $("#map-sidebar"),
			win: $(window),
			konamiKeys: [],
			konamiCounter: 0,
			konamiCode: [38, 38, 40, 40, 37, 39, 37, 39, 66, 65]
		}
	},

	init: function() {
		thriveMasterSettings = this.settings();

		this.uiBindings();
	},

	uiBindings: function () {
		thriveMasterSettings.mapSidebarForm.submit(ThriveMaster.submitMapSidebar);

		thriveMasterSettings.win.keydown(ThriveMaster.konami);
	},

	getHash: function() {
		if (location.hash) {
	        var hash = location.hash;
	        var hash_arr = hash.match(/\#(.*)/);
	        var hash_result = hash_arr[1].toLowerCase();
	        return hash_result;
	    }
	},

	submitMapSidebar: function(e) {
		e.preventDefault();

		var data = $("#map-sidebar-input").val();

		window.location = "/find-thrive?q=" + data;
	},

	getQuery: function() {
		var search = location.search;
        var query = search.slice(1);
        return query.match(/\=(.*)/);
	},

	konami: function(e) {
		var s = thriveMasterSettings;
		var k = e.which;

        s.konamiKeys.push(k);
        s.konamiCounter += 1;

        if (s.konamiCounter === 10) {
            if (ThriveMaster.arrayEqual( s.konamiKeys, s.konamiCode )) {
                ThriveMaster.iceCreamPopUp();
                alert("konami");

                konamiKeys = [];
                konamiCounter = 0;
            }

            else {
                konamiKeys = [];
                konamiCounter = 0;
                return false;
            }
        }
	},

	arrayEqual: function(array1, array2) {
		if (array1.length === array2.length) {
	        var length = array1.length;

	        for (var i = 0; i < length; i++) {
	            if (array1[i] != array2[i]) {
	                return false;
	            }
	        }
	        return true;
	    }

	    else { return false; }
	},

	iceCreamPopUp: function() {
		var iceCreamPopper = '<div id="ice-cream-popper"><div id="cone"><\/div><\/div>'
    	$('body').append(iceCreamPopper);

    	var cone_target = $("#ice-cream-popper");

    	cone_target.animate({
	        bottom: -50
	    }, 
	    { 
	        duration: 2000, 
	        easing: 'linear' 
	    });

	    setTimeout(function() {
	        cone_target.fadeOut(500,
	            function(){
	                this.remove();
	            });
	    }, 3000);
	}

};

var ThriveHomePage = {

	settings: function() {
		return {
			cup: $("#cup"),
			shadow: $("#shadow"),
			tWindow: $(window)
		}
	},

	init: function() {
		thriveHomePageSettings = this.settings();
		this.uiBindings();

		this.floatCup();
		this.shadow();
	}, 

	uiBindings: function() {
		thriveHomePageSettings.cup.click(ThriveHomePage.alertTest);
	},

	alertTest: function() {
		alert("fire");
	},

	floatCup: function() {
		// Get cup animation selectors from this.settings and get dimensions
		var cupTop, cupBottom;
		cupTop = thriveHomePageSettings.cup.height() * 0.10;
		cupBottom = thriveHomePageSettings.cup.height() * 0.14;

		// Activate animation and recursively call it
		thriveHomePageSettings.cup.animate({ top: cupBottom }, { duration: 1000 })
			 .animate({ top: cupTop }, { duration: 1000, complete: ThriveHomePage.floatCup });

	},

	shadow: function() {
		// Activate animation and recursively call it
		thriveHomePageSettings.shadow.animate({ width: 55 + '%'}, { duration: 1000})
									 .animate({ width: 60 + '%'}, { duration: 1000, complete: ThriveHomePage.shadow});
		
	}

};

var ThriveProducts = {
	settings: function() {
		return {
			tWindow: $(window),
			tBody: $("body"),
			cup: $(".product-cup"),
			productBasicMore: $("#product-basic-more"),
			productsInfo: $("#products-info"),
			moreProductInfoContainer: $("#more-product-info-container"),
			learnMoreLink: $(".learn-more-link"),
			productBasicScroller: $("#product-basic-scroller"),
			productScrollerItem: $(".product-scroller-item"),
			productsIntro: $("#products-intro")
		}
	},

	init: function() {
		thriveProductsSettings = this.settings();
		this.uiBindings();
		this.getProductWHash(function() {
			return ThriveMaster.getHash();
		}());
	},

	uiBindings: function() {
		thriveProductsSettings.cup.click(function() {
			ThriveProducts.getProductInfo(this);
			return false;
		});

		thriveProductsSettings.tWindow.resize(function() {
			ThriveProducts.getOffset(false);
		});

		thriveProductsSettings.tWindow.on("load", function() {
			ThriveProducts.getOffset(true);
		});

		thriveProductsSettings.learnMoreLink.click(function(e) {
			ThriveProducts.expandProductInfo(e, this);
		});

	},

	getProductInfo: function(cup) {
		var cup = $(cup);
		var num = cup.index();
		var cupInfo = thriveProductsSettings.productScrollerItem.eq(num + 1);
		var scroller = ( num + 1) * -230;

        thriveProductsSettings.productBasicMore.show();

		cup.fadeTo("slow", 1);
		cup.siblings().fadeTo("slow", 0.33);

		
		
		thriveProductsSettings.productsInfo.removeClass()
						      .addClass("products-selector-" + num);

		cupInfo.siblings().removeClass("selected");

        thriveProductsSettings.moreProductInfoContainer.remove();
        thriveProductsSettings.learnMoreLink.html('Nutritional Info <i class="icon-angle-down"><\/i>');

		thriveProductsSettings.productBasicScroller.animate({top: scroller}, 700 );
		setTimeout(
				function() {
					cupInfo.addClass("selected");
				}, 550);
	},

	getOffset: function(resize) {
        var offsets = [];
        var style_string = "";
        var window_width = thriveProductsSettings.tWindow.width();
        var arrow_start = ".products-first-selector:before { \n left: " + window_width / 2 + "px;\n}\n";

        for (var i = 0; i < 4; i += 1) {
            
            var amount = thriveProductsSettings.cup.eq(i).offset().left + 60;

            offsets[i] = ".products-selector-" + i + ":before { \n left: " + amount + "px;\n}\n";

            style_string = style_string.concat(offsets[i]);
        }

        var style = document.createElement('style');
        style.type = 'text/css';
        $(style).addClass("product-arrow-setter");
        
        if (style.styleSheet) {
            style.styleSheet.cssText = style_string;
        }
        else {
            style.appendChild(document.createTextNode(style_string));
        }

        resize ? $('head').append(style) : $(".product-arrow-setter").html(style_string);
	},

	expandProductInfo: function(e, elem) {
		e.preventDefault();
		var thisElem = $(elem);
		var class_name = thriveProductsSettings.productsInfo.attr('class');
        var cup_num = parseInt(class_name.slice(-1));

        thriveProductsSettings.productsInfo.toggleClass("product-more-expanded");

		if (! thriveProductsSettings.productsInfo.hasClass("product-more-expanded")) {

            setTimeout(function(){
                $("#more-product-info-container").remove();
                thriveProductsSettings.tBody.animate({ scrollTop: thriveProductsSettings.productsIntro.offset().top });
            }, 600);
			

			thisElem.html('Nutritional Info <i class="icon-angle-down"></i>');

			return false;
		}

		else {
			thisElem.html('Less <i class="icon-angle-up"></i>');

			setTimeout(
				function() {
					return ThriveProducts.ajaxProductInfo(cup_num)
				},100);

			return false;
		}
	},

	ajaxProductInfo: function(num) {
		var req = new XMLHttpRequest();

		req.open("GET",
				 "/wp-content/themes/Thrive/LoadContent.php" + "?cup=" + num,
				 false
				);

		req.send(null);

		if (req.status == 200) {
			thriveProductsSettings.productsInfo.find(".scalable-container").append(req.responseText);
		}
		return false;
	},

	getProductWHash: function(product) {
		if (product) {
			var eq;

	        switch (product) {
	            case "vanilla":
	                eq = 0;
	                break;
	            case "chocolate-fudge":
	                eq = 1;
	                break;
	            case "strawberry":
	                eq = 2;
	                break;
	            case "milk-chocolate":
	                eq = 3;
	                break;
	        }

	        var thisCup = thriveProductsSettings.cup.eq(eq);
	        thisCup.trigger("click");
	        thriveProductsSettings.learnMoreLink.trigger("click");
	    }
	}


};

var ThriveFind = {
	settings: function() {
		return {
			dropdownSource: $("#radiusSelect"),
			radiusInput: $("#addy_in_radius"),
			doc: $(document),
			win: $(window),
			upCounter: 0,
			downCounter: 0,
			map: $("#sl-total-container"),
			loading: $("#map-loading"),
			searchForm: $("#searchForm"),
			mapSidebar: $("#map_sidebar"),
			slMapContainer: $("#sl-map-container"),
			slMapExpander: $("#sl-map-expander")
		}
	},

	init: function() {
		$("#csl-slplus_user_header_css-css").remove();
		$("#addressInput").attr("size", "40");

		thriveFindSettings = this.settings();
		this.createDropdown();
		this.uiBindings();

		// Remove loading gif, show map
		thriveFindSettings.loading.remove();
		thriveFindSettings.map.animate({ opacity: 1 });
	},

	uiBindings: function() {
		$("#target").click(ThriveFind.dropMenu);
		$(".dropdown dd ul li a").click(ThriveFind.selectRadius);
		thriveFindSettings.doc.click(function(e){
			ThriveFind.collapseDropDown(e.target);
		});
		thriveFindSettings.win.keydown(function(e) {
			return ThriveFind.dropDownKeyScroll(e);
		});
		thriveFindSettings.searchForm.submit(ThriveFind.locationQuery);
		thriveFindSettings.slMapExpander.click(ThriveFind.toggleMapSlide);

		thriveFindSettings.win.on("load", function() {
			if (location.search) {
				ThriveFind.getLocationSearch(function() {
					return ThriveMaster.getQuery()[1];
				}());
			}
		});
	},

	createDropdown: function() {
        var selected = thriveFindSettings.dropdownSource.find("option[selected]");
        var options = $("option", thriveFindSettings.dropdownSource);
        

        thriveFindSettings.radiusInput.append('<dl id="target" class="dropdown"></dl>');
        var target = $("#target");

        target.append('<dt><a href="#">' + selected.text() + '<span class="value">' +
        selected.val() + '</span><i class="icon-angle-down"></i></a></dt>');

        target.append('<dd><ul></ul></dd>');

        options.each(function(){
            $("#target dd ul").append('<li><a href="#">' + $(this).text()
                + '<span class="value">' + $(this).val() + '</span></a></li>');
        });
	},

	dropMenu: function() {
		$(".dropdown dd ul").toggleClass("select-drop");
        $(this).focus();

        return false;
	},

	selectRadius: function() {
		var text = $(this).html();

    	$(".dropdown dt a").html(text + '<i class="icon-angle-down"></i>');

    	$(".dropdown dd ul").removeClass("select-drop");

    	thriveFindSettings.dropdownSource.val($(this).find("span.value").html());

    	return false;
	},

	collapseDropDown: function(target) {
		var $target = $(target);

		if ( ! $target.parents().hasClass("dropdown")) {
    		$(".dropdown dd ul").removeClass("select-drop");
    	}
	},

	dropDownKeyScroll: function (e) {
		if ($(".dropdown dt a").is(":focus") && e.which == 40) {
    		$(".dropdown dd ul").addClass("select-drop");
    		$(".dropdown li a").eq(thriveFindSettings.downCounter).addClass("hovered");
    		$(".dropdown li a").eq(thriveFindSettings.downCounter - 1).removeClass("hovered");
    		thriveFindSettings.downCounter ++;
    		thriveFindSettings.upCounter = thriveFindSettings.downCounter - 2;

    		return false;
    	}

    	if ($(".dropdown dt a").is(":focus") && e.which == 38) {
    		$(".dropdown dd ul").addClass("select-drop");
    		$(".dropdown li a").eq(thriveFindSettings.upCounter).addClass("hovered");
    		$(".dropdown li a").eq(thriveFindSettings.upCounter + 1).removeClass("hovered");
    		thriveFindSettings.upCounter --;
    		thriveFindSettings.downCounter = thriveFindSettings.upCounter + 2;

    		return false;
    	}

    	if ($(".dropdown dt a").is(":focus") && e.which == 13) {
    		$(".dropdown dd ul").removeClass("select-drop");

    		var text = $(".hovered").html();
    		$(".dropdown dt a").html(text + '<i class="icon-angle-down"></i>');

    		var source = $("#radiusSelect");
    		source.val($(this).find("span.value").html());

    		$("#addressSubmit").focus();

    		return false;
    	}

        if ($("#addressInput").is(":focus") && e.which == 9) {
            $(".dropdown dt a").focus();

            return false;
        }
	},

	locationQuery: function() {
		thriveFindSettings.mapSidebar.html('<img id="map-loading" style="top: 200px;" src="http://thriveicecream.com/wp-content/themes/Thrive/Images/ajax-loader.gif" />');
        if (! thriveFindSettings.slMapContainer.hasClass("map-slide")) {
            ThriveFind.toggleMapSlide();
        }
	},

	toggleMapSlide: function () {
		var icon_expander = $("#sl-map-expander i");
        thriveFindSettings.slMapContainer.toggleClass("map-slide");
        icon_expander.toggleClass("icon-angle-right");
        icon_expander.toggleClass("icon-angle-left");
	},

	getLocationSearch: function(q) {
		var query = decodeURIComponent(q);

		$("#addressInput").val(query);
        thriveFindSettings.searchForm.submit();
	}
};

var ThriveFAQ = {
	settings: function() {
		return {
			faqTitle: $(".faq-title"),
        	faqAnswer: $(".faq-answer"),
        	iconPlus: ' <i class="icon-plus faq-expand"></i>',
        	faqContainer: $("#faq-container")
		}
	},

	init: function() {
		thriveFAQSettings = this.settings();
		this.uiBindings();

		thriveFAQSettings.faqTitle.append(thriveFAQSettings.iconPlus);

		this.getFAQWithHash(function() {
			return ThriveMaster.getHash();
		}());
	},

	uiBindings: function() {
		thriveFAQSettings.faqContainer.click(function(e) {
			ThriveFAQ.expandFAQ(e);
		});
	},

	expandFAQ: function(e) {
		$this = $(this);
        var $collapse, $open, $icon;

        var $target = $(e.target);

        if ($target.hasClass("faq-expand")) {
            $collapse = $target.parents().parents().siblings();
            $open = $target.parent().next();
            $icon = $target;
        }

        if ($target.hasClass("faq-title")) {
            $collapse = $target.parents().siblings();
            $open = $target.next();
            $icon = $target.find(".faq-expand");
        }

        $collapse.find(".faq-answer").hide( 'slide' );
        $collapse.find(".faq-expand").removeClass("faq-expand-open");
        $open.toggle('slide');
        $icon.toggleClass("faq-expand-open");
	},

	getFAQWithHash: function (hash) {
		if (hash) {
			var eq;

			// debugger;

	        switch (hash) {
	            case "what-is-thrive":
	                eq = 0;
	                break;
	            case "nutritional-value":
	                eq = 1;
	                break;
	            case "special":
	                eq = 2;
	                break;
	            case "where-to-buy":
	                eq = 3;
	                break;
	            case "thrive-is-different":
	                eq = 4;
	                break;
	            case "who":
	                eq = 5;
	                break;
	            case "when":
	                eq = 6;
	                break;
	            case "maintaining-weight":
	                eq = 7;
	                break;
	            case "kosher":
	                eq = 8;
	                break;
	            case "gluten-free":
	                eq = 9;
	                break;
	            case "allergens":
	                eq = 10;
	                break;
	            case "lactose-intolerant":
	                eq = 11;
	                break;
	            case "flavors":
	                eq = 12;
	                break;
	            case "complete":
	                eq = 13;
	                break;
	            case "protein":
	                eq = 14;
	                break;
	            case "type-of-protein":
	                eq = 15;
	                break;
	            case "fiber":
	                eq = 16;
	                break;
	            case "fibersol-2":
	                eq = 17;
	                break;
	            case "benefits":
	                eq = 18;
	                break;
	            case "thrive-vs-ensure":
	                eq = 19;
	                break;
	            case "physician":
	                eq = 20;
	                break;
	            case "how-many":
	                eq = 21;
	                break;
	            case "store":
	                eq = 22;
	                break;
	        }

	        $target = $('.faq').eq(eq);

	        $("body").animate(
	        	{
	        		scrollTop: $target.offset().top
	        	}, 
	        	{
	        		complete: function() {
	        			$target.find(".faq-answer").show( 'slide' );
	        		}
	        	}
	        );
		}
	}
};

var ThriveArticleLoader = {
	settings: function() {
		return {
			page: 1,
			cat: $("#cat-name").text(),
			loading: true,
			win: $(window),
			target: $("#posts-load-target"),
			loader: '<div id="loading" style="position:absolute; left: 50%; margin-left: -15px"><img src="http://thriveicecream.com/wp-content/themes/Thrive/Images/ajax-loader.gif"></div>',
			newerPosts: $(".newer-posts"),
			olderPosts: $(".older-posts"),
			postID: $("#post-id").text(),
			loadControls: $("#post-load-controls")
		}
	},

	init: function() {
		thriveLoaderSettings = this.settings();

		this.uiBindings();
		this.loadPosts();
	},

	uiBindings: function() {
		var s = thriveLoaderSettings;

		s.loadControls.on("click", ".clickable", ThriveArticleLoader.loadControlsHandler);
	},

	loadPosts: function() {
		var s = thriveLoaderSettings;

		var category = s.cat.match(/[\w]+/);

		$.ajax({
			type : 'GET',
			data: { 
				'numposts'   : 4, 
				'pageNumber' : s.page, 
				'catName'    : category[0],
				'postID'     : s.postID
			},
			dataType: "html",
			url: "/wp-content/themes/Thrive/loopHandler.php",
			beforeSend : function() {
				if (page != 1) {  
                        s.newerPosts.before(s.loader);
                    }  
			},
			success: function(data) {
				$data = $(data);
				if ($data.find("li").length) {
					$data.hide();
					s.target.html($data);
					$data.fadeIn(600, function() {
						$("#loading").remove();
						s.loading = false;
					});
				}
				else {
					$("#loading").remove();
					page--;
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert(jqXHR + " " + textStatus + " " + errorThrown);
			}
		});
	},

	loadControlsHandler: function() {
		var s = thriveLoaderSettings;

		$this = $(this);

		if ($this.hasClass("older-posts")) {
			s.page++;
		}
		else if ($this.hasClass("newer-posts")) {
			s.page --;
			s.olderPosts.addClass("clickable");
		}

		s.page > 1 ? s.newerPosts.addClass("clickable") : s.newerPosts.removeClass("clickable");

		ThriveArticleLoader.loadPosts();

		return false;
	}
};

var ThriveMobile = {
	settings: function() {
		return {
			mobileMenuTrigger: $("#mobile-menu-trigger"),
			page: $("#page"),
			mobileMenu: $("#mobile-menu")
		}
	},

	init: function() {
		thriveMobileSettings = this.settings();

		thriveMobileSettings.mobileMenu.find(".children").before('<a href="#" class="mobile-children-drop"><i class="icon-angle-down"><\/i><\/a>');
		this.uiBindings();
	},

	uiBindings: function() {
		thriveMobileSettings.mobileMenuTrigger.click(ThriveMobile.expandMobileMenu);
		$(".mobile-children-drop").click(ThriveMobile.showChildren);
	},

	expandMobileMenu: function() {
		thriveMobileSettings.page.toggleClass("triggered");
		thriveMobileSettings.mobileMenu.toggleClass("menu-triggered");
	},

	showChildren: function() {
		$this = $(this);
        $icon = $this.find("i");
        $this.siblings(".children").toggle();
        $icon.toggleClass("icon-angle-down");
        $icon.toggleClass("icon-angle-up");
	}
}

// Initiate modules on page load.
// Modules are initiated depending on page
$(document).ready(function(){

	var path = window.location.pathname;

	ThriveMaster.init();

	if (/products/.test(path)) {
		ThriveProducts.init();
	}

	if ($("#posts-load-target").length > 0) {
		ThriveArticleLoader.init();
	}

	if (/find-thrive/.test(path)) {
		ThriveFind.init();
	}

	if (/faq/.test(path)) {
		ThriveFAQ.init();
	}

	
	ThriveHomePage.init();
	ThriveMobile.init();

});