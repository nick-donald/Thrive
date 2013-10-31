<?php
	if (!is_admin()) { 
		add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
		add_action("wp_enqueue_scripts", "jquery_mobile", 13);
	}
	
	function my_jquery_enqueue() {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
	   wp_enqueue_script('jquery');
	}
	add_theme_support( 'post-thumbnails' ); 

	function register_ajaxLoop_script() {  
	    wp_register_script(  
	      'ajaxLoop',  
	       get_template_directory_uri() . '/JS/ajaxLoop.js',  
	       array('jquery')  
	    );  
	    wp_enqueue_script('ajaxLoop');  
	}  
	add_action('wp_enqueue_scripts', 'register_ajaxLoop_script'); 

	function register_thrive_script() {  
	    wp_register_script(  
	      'thrive',  
	       get_template_directory_uri() . '/JS/thrive.js',  
	       array('jquery')  
	    );  
	    wp_enqueue_script('thrive');  
	}  
	add_action('wp_enqueue_scripts', 'register_thrive_script', 12);

	function jquery_mobile() {
		wp_register_script(
			'jquery-mobile',
			get_template_directory_uri() . '/JS/jquery.mobile-1.3.2.min.js',
			array('jquery')
		);
		wp_enqueue_script('jquery-mobile');
	}

	function split_content($splitter, $i = null ) {
		global $more;
		$more = true;
		// $more_select ? $content = preg_split($splitter, get_the_content('more')) : $content = preg_split($splitter, get_the_content());
		$content = preg_split($splitter, get_the_content(), -1, PREG_SPLIT_DELIM_CAPTURE);
		$csize = count($content);

		if (isset($i)) {
			return apply_filters('the_content', $content[$i]);
		}
		else {
			for($c = 0, $c < $csize; $c++;) {
				$content[$c] = apply_filters('the_content', $content[$c]);
			}
			return $content;
		}
	}

	function google_analytics() { ?>
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js';,'ga');

		ga('create', 'UA-44081234-1', 'thriveicecream.com');
		ga('send', 'pageview');
		</script>
	<?php }
	// add_action("wp_footer", "google_analytics");
?>