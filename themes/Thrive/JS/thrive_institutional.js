var ThriveInstitutional = ThriveInstitutional || {};

ThriveInstitutional.app = function() {
	var w = $(window), m = $("#inst-marquee"), clicked = 0;

	var testScroll = function(e) {
		if (e.which === 39) {
			scrollRight();
		} else if (e.which === 37) {
			scrollLeft();
		}
	};

	(function setEventListeners() {
		w.keydown(testScroll);
	}());

	var scrollRight = function() {
		var slides = $(".marquee-content");
		var transitionStr = "-webkit-transition: all 0.8s;"
		slides.addClass("transition");

		// slides.attr("style", transitionStr);
		clicked < 3 ? clicked ++ : clicked = 0;
		var offset = clicked * -1150;
		// var styleString = "-webkit-transform: translate3d(" + offset + "px, 0, 0);"
		var styleString = "left:" + offset + "px;";
		var styleString2 = "left:0;";
		// $(".one").attr("style", styleString);
		// $(".two").attr("style", styleString2);
		var currActive = $(".active");
		$(".active").next().addClass("active").removeClass("next");
		currActive.addClass("last").removeClass("active");
		// slides.attr("style", "");

		$(".active").on("transitionend", function() {
			checkIfLastR();
			slides.removeClass("transition");
		});
	};

	var checkIfLastR = function() {
		if ($(".dup").hasClass("active")) {
			$(".first").addClass("active").removeClass("last");
			$(".first").siblings().addClass("next").removeClass("active").removeClass("last");
		}
	};

	var scrollLeft = function() {
		var currActive = $(".active");
		var slides = $(".marquee-content");
		// if ($(".first").hasClass("active")) {
		// 	checkIfLastL();
		// 	// $(".active").prev().addClass("active").removeClass("last");
		// 	// $(".dup").removeClass("active");
		// 	var currActive = $(".active");
		// } 
		slides.addClass("transition");
		
		$(".active").prev().addClass("active").removeClass("last");
		currActive.addClass("next").removeClass("active");

		$(".active").on("transitionend", function() {
			checkIfLastL();
			slides.removeClass("transition");
		});


		
		
		
		// var transitionStr = "-webkit-transition: all 0.8s;"

		// slides.attr("style", transitionStr);
		// clicked < 1 ? clicked = 3 : clicked --;
		// var offset = clicked * -1150;
		// // var styleString = "-webkit-transform: translate3d(" + offset + "px, 0, 0);"
		// var styleString = "left:" + offset + "px;";
		// var styleString2 = "left:0;";
		// // $(".one").attr("style", styleString);
		// // $(".two").attr("style", styleString2);
		// var currActive = $(".active");
		// $(".active").prev().addClass("active").removeClass("last");

		// currActive.addClass("next").removeClass("active");

		// if ($(".active").hasClass("first")) {
			
		// 	$(".next").removeClass("next");
		// 	$(".first").removeClass("active");
		// 	$(".dup").addClass("active");
		// 	$(".active").on("transitionend", function() {
		// 		slides.attr("style", "");
		// 		$(".first").siblings().addClass("next");
		// 		$(".active").off("transitionend");
		// 	});
		// }
	};

	var checkIfLastL = function() {
		if ($(".pre").hasClass("active")) {
			$(".dup").siblings().addClass("last").removeClass("active").removeClass("next");
			$(".post").addClass("active").removeClass("next").removeClass("last");
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
	}



}

$(document).ready(function() {
	new ThriveInstitutional.app;
});