$(document).ready(function(){

    // get hash function
    var get_hash = function() {
        if (!location.hash) {
            return;
        }
        var hash = location.hash;
        var hash_arr = hash.match(/\#(.*)/);
        var hash_result = hash_arr[1].toLowerCase();
        return hash_result;
    }

    // remove some jQuery mobile functionality

    $(document).bind('pageinit', function () {
        $.mobile.defaultPageTransition = 'none';
        $.mobile.ignoreContentEnabled = true;
    });

    $("select, button, form, input, textarea").attr("data-role", "none");

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

        $("#addressInput").attr("size", "40");

        $(window).on("load", function() {
            $("#map-loading").remove();
            $("#sl-total-container").animate({ opacity: 1 });
        });

        if (location.search) {
            var search = location.search;
            var query = search.slice(1);
            query = query.match(/\=(.*)/);
            $("#addressInput").val(decodeURIComponent(query[1]));
            var button = $("#addressSubmit");
            $(window).on("load", function() {
                $("#searchForm").submit();
            });
        }
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

        $(window).keydown(function(e){
        	
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

            konami_finder(e);

        });

    /* show results by sliding map
     * triggered by data success in: /wp-content/plugins/store-locator-le/core/js/csl.js - line 1066
     */

    var toggle_map_slide = function() {
        var icon_expander = $("#sl-map-expander i");
        $("#sl-map-container").toggleClass("map-slide");
        icon_expander.toggleClass("icon-angle-right");
        icon_expander.toggleClass("icon-angle-left");
    }

    // activate map slide on arrow click
    $("#sl-map-expander").click(function() {
        toggle_map_slide();
    });

    // open results on search form submit and add loader gif

    $("#searchForm").on("submit", function() {
        $("#map_sidebar").html('<img id="map-loading" style="top: 200px;" src="http://thriveicecream.com/wp-content/themes/Thrive/Images/ajax-loader.gif" />');
        if (! $("#sl-map-container").hasClass("map-slide")) {
            toggle_map_slide();
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

    var get_product_w_hash = function(product) {
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

        var $cup = $(".product-cup").eq(eq);

        $cup.trigger("click");
        $(".learn-more-link").trigger("click");
    }

    if ($(".product-cup").length > 0) {
        $(window).on("load", function() {
            get_offset(true);
            get_product_w_hash(function() {
                return get_hash();
            }());
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
    var activate_faq = function() {
        var $faq_title = $(".faq-title");
        var $faq_answer = $(".faq-answer");
        var icon_plus = ' <i class="icon-plus faq-expand"></i>';
        // var $faq_expand = $(".faq-expand");
        
        $faq_title.append(icon_plus);
        $faq_answer.hide();

        // $faq_expand.hide();

        $("#faq-container").click(function(e){
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
        
        });

    }

    var get_faq = function(faq) {
        var eq;

        switch (faq) {
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

        $(window).on("load", function() {
            $("body").animate({scrollTop: $target.offset().top});
            $target.find(".faq-expand").trigger("click");
        });
    }

    if ($('.faq').length > 0) {
        activate_faq();

        if (location.hash) {
            get_faq(function() {
                return get_hash();
            }());
        }
    }
    

    // rotate function

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



    var konamiKeys = [],
        konamiCounter = 0,
        konamiAnswer = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];

    var konami_finder = function(e) {

        var k = e.which;
        konamiKeys.push(k);
        konamiCounter += 1;

        if (konamiCounter === 10) {
            if (arrayEqual( konamiKeys, konamiAnswer )) {
                konami();
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
        
    }

    // $(window).keydown(function(e){
    //     var k = e.which;
    //     konamiKeys.push(k);
    //     konamiCounter += 1;

    //     if (konamiCounter === 10) {
    //         if (arrayEqual( konamiKeys, konamiAnswer )) {
    //             konami();
    //             alert("konami");

    //             konamiKeys = [];
    //             konamiCounter = 0;
    //         }

    //         else {
    //             konamiKeys = [];
    //             konamiCounter = 0;
    //             return false;
    //         }
    //     }

    // });

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

    $("#map-sidebar").on("submit", function(e) {
        var data = $("#map-sidebar-input").val();
        e.preventDefault();
        window.location = "/wordpress/find-thrive?q=" + data;
    });

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