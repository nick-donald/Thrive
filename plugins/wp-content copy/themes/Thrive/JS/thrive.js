$(document).ready(function(){

    $(document).bind('pageinit', function () {
        $.mobile.defaultPageTransition = 'none';
        $.mobile.ignoreContentEnabled = true;
    });

	var cupTop = $('#cup-container').height() * 0.10;
    var cupBottom = $('#cup-container').height() * 0.14;

    var $cup_selector = $("#cup");
    var $shadow_selector = $("#shadow");
    
    function floatCup() {
        
        $cup_selector.animate({ top: cupBottom }, {duration: 1000})
                 .animate({ top: cupTop }, { duration: 1000, complete: floatCup});
    }
    
    function shadow() {
        
        $shadow_selector.animate({ width: 55 + '%'}, { duration: 1000})
                    .animate({ width: 60 + '%'}, { duration: 1000, complete: shadow});
    }
    
    if ($(window).width() > 480) {
    
        $cup_selector.animate({
            top: cupTop
        }, 2000);
        
        $shadow_selector.animate({
                width: 60 + '%'
            }, 2000);
        
            floatCup();
            shadow();
        
    }
    
    else {
        if ($(".product-cup").length > 0) {
            $(".product-scroller-default").find("p").html('Swipe for more <i class="icon-angle-right"><\/>');
        }
    }

    // dropdown on map page

    function createDropDown() {
        var $source = $("#radiusSelect");
        var $selected = $source.find("option[selected]");
        var $options = $("option", $source);
        

        $("#addy_in_radius").append('<dl id="target" class="dropdown"></dl>');
        var $target = $("#target");

        $target.append('<dt><a href="#">' + $selected.text() + '<span class="value">' +
        $selected.val() + '</span><i class="icon-angle-down"></i></a></dt>');

        $target.append('<dd><ul></ul></dd>');

        $options.each(function(){
            $("#target dd ul").append('<li><a href="#">' + $(this).text()
                + '<span class="value">' + $(this).val() + '</span></a></li>');
        });

    }

    if ($("#map-container").length > 0) {
        // mapFunctions();
        createDropDown();
    }

        $("#target").on("click", function(){
            $(".dropdown dd ul").toggleClass("select-drop");
            $(this).focus();

            return false;
        });

        $(".dropdown dd ul li a").click(function(){
        	var text = $(this).html();

        	$(".dropdown dt a").html(text + '<i class="icon-angle-down"></i>');

        	$(".dropdown dd ul").removeClass("select-drop");

        	var $source = $("#radiusSelect");

        	$source.val($(this).find("span.value").html());

        	return false;
        });

        $(document).click(function(e){
        	var $clicked = $(e.target);

        	if ( ! $clicked.parents().hasClass("dropdown")) {
        		$(".dropdown dd ul").removeClass("select-drop");
        	}
        });

        var upCounter = 0;
        var downCounter = 0;

        $(document).keydown(function(e){
        	
        	if ($(".dropdown dt a").is(":focus") && e.which == 40) {
        		$(".dropdown dd ul").addClass("select-drop");
        		$(".dropdown li a").eq(downCounter).addClass("hovered");
        		$(".dropdown li a").eq(downCounter - 1).removeClass("hovered");
        		downCounter ++;
        		upCounter = downCounter - 2;

        		return false;
        	}

        	if ($(".dropdown dt a").is(":focus") && e.which == 38) {
        		$(".dropdown dd ul").addClass("select-drop");
        		$(".dropdown li a").eq(upCounter).addClass("hovered");
        		$(".dropdown li a").eq(upCounter + 1).removeClass("hovered");
        		upCounter --;
        		downCounter = upCounter + 2;

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
        });

    	$("#addressInput").attr("placeholder", "Enter Address or Zip Code");

    
    //end map functions

	//products page

	$(".product-cup").click(function(){
        product_info_get(this);

        return false;
    });

    function product_info_get(obj) {

        $this = $(obj);

        $("#product-basic-more").show();

		$this.fadeTo("slow", 1);
		$this.siblings().fadeTo("slow", 0.33);
		var num = $this.index();

		$thisInfo = $(".product-scroller-item").eq(num + 1);
		
		$("#products-info").removeClass()
						   .addClass("products-selector-" + num);
		var scroller = ( num + 1) * -230;

		$thisInfo.siblings().removeClass("selected");

        $("#more-product-info-container").remove();
        $(".learn-more-link").html('Nutritional Info <i class="icon-angle-down"><\/i>');

		$("#product-basic-scroller").animate({top: scroller}, 700 );
		setTimeout(
				function() {
					$thisInfo.addClass("selected");
				}, 550);

		return false;
	}

    function get_offset(resize) {
        $product_cup = $('li.product-cup');
        var offsets = [];
        var style_string = "";
        var window_width = $(window).width();
        var arrow_start = ".products-first-selector:before { \n left: " + window_width / 2 + "px;\n}\n";

        for (var i = 0; i < 4; i += 1) {
            
            var amount = $product_cup.eq(i).offset().left + 60;

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
    }

    if ($(".product-cup").length > 0) {
        $(window).on("load", function() {
            get_offset(true);
        });
    }

    $(window).resize(function(){
        if ($(".product-cup").length > 0) {
            get_offset(false);
            $("#product-basic-scroller").css({ left: 0 });
        }
    });

	$("#products-info").click(function(){
		$(this).removeClass("products-first-selector");
		$(this).addClass("products-second-selector");
	});

	// Products Info Expander

	var products_info = $("#products-info");

	$(".learn-more-link").click(function(){
		// $("#products-info").css({height: 750});

        var class_name = $("#products-info").attr('class');

        var cup_num = parseInt(class_name.slice(-1));

        products_info.toggleClass("product-more-expanded");

		if (! products_info.hasClass("product-more-expanded")) {

            setTimeout(function(){
                $("#more-product-info-container").remove();
                $("body").animate({scrollTop: $("#products-intro").offset().top});
            }, 600);
			

			$(this).html('Nutritional Info <i class="icon-angle-down"></i>');

			return false;
		}

		else {
			$(this).html('Less <i class="icon-angle-up"></i>');

			setTimeout(
			function() {
				return getProductInfo(cup_num)
			},100);

			return false;
		}

	});

	function getProductInfo(num) {
		var req = new XMLHttpRequest();

		req.open("GET",
				 "/wp-content/themes/Thrive/LoadContent.php" + "?cup=" + num,
				 false
				);

		req.send(null);

		if (req.status == 200) {
			$("#products-info .scalable-container").append(req.responseText);
		}
		return false;
	}

    //map
    $("#csl-slplus_user_header_css-css").remove();

    //faq
    function activate_faq() {
        var $faq_title = $(".faq-title");
        var $faq_answer = $(".faq-answer");
        var icon_plus = ' <i class="icon-plus faq-expand"></i>';
        // var $faq_expand = $(".faq-expand");
        
        $faq_title.append(icon_plus);
        $faq_answer.hide();

        // $faq_expand.hide();

        $(".faq-expand").click(function(){
            $this = $(this);
            $this_cousin = $this.parents().parents().siblings();

            $this_cousin.find(".faq-answer").hide( 'slide' );
            $this_cousin.find(".faq-expand").removeClass("faq-expand-open");
            $this.parent().next().toggle('slide');
            $this.toggleClass("faq-expand-open");
        });

    }

    $.fn.animateRotate = function(angle, duration, easing) {

        $elem = $(this);

        return this.each(function(){
                $({deg:0}).animate({deg:angle}, {
                duration: duration,
                easing: easing,
                step: function(now) {
                    $elem.css(
                        "-webkit-transform", "rotate(" + now + "deg)"
                    )
                }
            });
        });   
    }


    activate_faq();

    var konamiKeys = [],
        konamiCounter = 0,
        konamiAnswer = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];

    $(window).keydown(function(e){
        var k = e.which;
        konamiKeys.push(k);
        konamiCounter += 1;

        if (konamiCounter === 10) {
            if (arrayEqual( konamiKeys, konamiAnswer )) {
                konami();

                konamiKeys = [];
                konamiCounter = 0;
            }

            else {
                konamiKeys = [];
                konamiCounter = 0;
                return false;
            }
        }

    });

    // locator dropdown

    $(window).scroll(function(){
        if ($(this).scrollTop() > 1500) {
            $("#locator-popdown").show("slide");
        }
        else {
            $("#locator-popdown").hide("slide");
        }
    });

    // mobile controls

    $("#mobile-menu-trigger").click(function(){
        $("#page").toggleClass("triggered");
        $("#mobile-menu").toggleClass("menu-triggered");
    });

    $("#mobile-menu").find(".children").before('<a href="#" class="mobile-children-drop"><i class="icon-angle-down"><\/i><\/a>');

    $(".mobile-children-drop").click(function(){
        $this = $(this);
        $icon = $this.find("i");
        $this.siblings(".children").toggle();
        $icon.toggleClass("icon-angle-down");
        $icon.toggleClass("icon-angle-up");
    });

    function product_info_get_mobile(product) {
        var amount = product * -380;
        $("#product-basic-scroller").animate({
            left: amount
        });
    }

    $("#products-info").on("swipeleft", product_left_swipe);
    $("#products-info").on("swiperight", product_right_swipe);

    function product_right_swipe(){
        $selected = $(".selected");
        selected_num = $selected.index();
        $next_item = $(".product-scroller-item").eq(selected_num - 1);
        next_item_num = selected_num - 2;

        $scroller = $("#product-basic-scroller");

        var amount = (selected_num - 1) * -370;

        

        if (next_item_num >= 0) {
            $next_item.siblings().removeClass("selected");
            $next_item.addClass("selected");
            $("#product-basic-more").show();

            $("#more-product-info-container").remove();
            $(".learn-more-link").html('Nutritional Info <i class="icon-angle-down"><\/i>');

            $("#products-info").removeClass().addClass("products-selector-" + next_item_num);
            $scroller.animate({ left: amount });

        }
    }

    function product_left_swipe() {
        $selected = $(".selected");
        selected_num = $selected.index();
        $next_item = $(".product-scroller-item").eq(selected_num + 1);
        next_item_num = selected_num + 1;

        $scroller = $("#product-basic-scroller");

        var amount = (next_item_num) * -370;

        

        if (next_item_num < 5) {
            $next_item.siblings().removeClass("selected");
            $next_item.addClass("selected");
            $("#product-basic-more").show();

            $("#more-product-info-container").remove();
            $(".learn-more-link").html('Nutritional Info <i class="icon-angle-down"><\/i>');

            $("#products-info").removeClass().addClass("products-selector-" + selected_num);
            $scroller.animate({ left: amount });

        }        
    }
});

// konami code: up up down down left right left right b a
// = 38 38 40 40 37 39 37 39 66 65

var konami = function() {
    var iceCreamPopper = '<div id="ice-cream-popper"><div id="cone"><\/div><\/div>'
    $('body').append(iceCreamPopper);
    iceCreamPopUp();
}

var iceCreamPopUp = function() {
    var cone_target = $("#ice-cream-popper");

    cone_target.animate({
        bottom: -50
    }, { 
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

var arrayEqual = function(array1, array2) {
    if (array1.length === array2.length) {
        var length = array1.length;

        for (var i = 0; i < length; i++) {
            if (array1[i] != array2[i]) {
                return false;
            }
        }
        return true;
    }
}