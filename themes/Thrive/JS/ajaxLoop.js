jQuery(function($){
	var page = 1;
	var $catName = $("#cat-name").text();
	var loading = true;
	var $window = $(window);
	var $target = $("#posts-load-target");
	var loader = '<div id="loading" style="position:absolute; left: 50%; margin-left: -15px"><img src="/wp-content/themes/Thrive/Images/ajax-loader.gif"></div>';
	var $newer_posts = $(".newer-posts");
	var $older_posts = $(".older-posts");
	var $postID = $("#post-id").text();



	$catName = $catName.match(/[\w]+/);

	var load_posts = function() {
		$.ajax({
			type : 'GET',
			data: { 
				'numposts'   : 4, 
				'pageNumber' : page, 
				'catName'    : $catName[0],
				'postID'     : $postID
			},
			dataType: "html",
			url: "/wordpress/wp-content/themes/Thrive/loopHandler.php",
			beforeSend : function() {
				if (page != 1) {  
                        $newer_posts.before(loader);
                    }  
			},
			success: function(data) {
				$data = $(data);
				if ($data.find("li").length) {
					$data.hide();
					// alert($data.find("li").size());
					$target.html($data);
					$data.fadeIn(600, function() {
						$("#loading").remove();
						loading = false;
					});
				}
				else {
					$("#loading").remove();
					page--;
				}
				// alert(jQuery.isEmptyObject( $data ));
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert(jqXHR + " " + textStatus + " " + errorThrown);
			}
		});
	}

	if ($("body").find("#other-posts-container").length > 0) {
		load_posts();
	}

	$("#post-load-controls").on("click", ".clickable" , function(){
		$this = $(this);

		if ($this.hasClass("older-posts")) {
			page++;
		}
		else if ($this.hasClass("newer-posts")) {
			page --;
			$older_posts.addClass("clickable");
		}

		page > 1 ? $newer_posts.addClass("clickable") : $newer_posts.removeClass("clickable");

		load_posts();

		return false;
	});
});