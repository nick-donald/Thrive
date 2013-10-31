var $marq_prev = $("#marquee-prev");
var $marq_next = $("#marquee-next");

var scroller = 0;
var marquee = {

	begin: function() {
		$marquee = $("#products-marquee");
		var set_width = $marquee.width();

		marquee.setShiftWidths(set_width);

		$(".product-slide").css({ width: set_width });

		$(document).click(function() {
			var index = $(".spotlight").index(".product-slide");
			marquee.animate_slide(set_width);
			// marquee.marquee_shift(index);
		});
	},

	setShiftWidths: function(width) {

		var sliders = [];

		for (var i = 0; i < 4; i++) {
			var transformString = "-webkit-transform: translate3d(" + i * -width + "px,0,0);";
			var shifter = ".slides-pos-" + i + "{\n\t"+ transformString +"\n}";

			sliders.push(shifter);
		}

		var sliderStyleText = sliders.join("\n");

		var style = document.createElement('style');
		style.type = 'text/css';
		style.className = "products-scroller"

		if (style.styleSheet) {
			style.styleSheet.css = "test";
		} else {
			style.appendChild(document.createTextNode(sliderStyleText));
		}
		$("head").append(style);
	},

	marquee_shift: function(index) {
		$(".spotlight").removeClass("spotlight");
		var $next = $(".product-slide").eq(index + 1);
		$next.addClass("spotlight");

		$("#slides").removeClass("slides-pos-" + index)
					.addClass("slides-pos-" + (index + 1));
	},

	animate_slide: function(width) {
		scroller -= width;
		$('.product-slide').animate(
			{
				left: scroller
			},
			{
				easing: "swing"
			}
			);
	}

}

$(document).ready(function() {
	marquee.begin();
});