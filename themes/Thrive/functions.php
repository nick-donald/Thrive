<?php
	if (!is_admin()) { 
		add_action("wp_enqueue_scripts", "my_jquery_enqueue", 0);
		// add_action("wp_enqueue_scripts", "jquery_mobile", 2);
		add_action('wp_enqueue_scripts', 'register_hammer_js', 1);
	}

	function enqueue_hammer_js() {
		wp_register_script(
			'hammerjs',
			get_template_directory_uri() . '/JS/hammer.min.js'
		);
		wp_enqueue_scripts('hammerjs');
	}
	// add_action('wp_enqueue_scripts', 'enqueue_hammer_js');

	function register_hammer_js() {  
	    wp_register_script(  
	      'hammerJs',  
	       get_template_directory_uri() . '/JS/hammer.min.js'
	    );  
	    wp_enqueue_script('hammerJs');  
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
	// add_action('wp_enqueue_scripts', 'register_ajaxLoop_script'); 

	function register_thrive_script() {  
	    wp_register_script(  
	      'thrive',  
	       get_template_directory_uri() . '/JS/thrive.js',  
	       array('jquery')  
	    );  
	    wp_enqueue_script('thrive');  
	}  
	// add_action('wp_enqueue_scripts', 'register_thrive_script', 1);

	function register_thrive_test_script() {  
	    wp_register_script(  
	      'new_products',  
	       get_template_directory_uri() . '/JS/new_products.js',  
	       array('jquery')  
	    );  
	    wp_enqueue_script('new_products');  
	}  
	add_action('wp_enqueue_scripts', 'register_thrive_test_script', 10);

	function register_thrive_refactor() {  
	    wp_register_script(  
	      'thrive_refactor',  
	       get_template_directory_uri() . '/JS/thrive_refactor.js',  
	       array('jquery')  
	    );  
	    wp_enqueue_script('thrive_refactor');  
	}  
	add_action('wp_enqueue_scripts', 'register_thrive_refactor', 11);

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

	// A/B testing functionns.
	// Check for cookie, if not set cookie for either A or B test (50/50 chance)
	// Add varaition class to body if variation, set cookie

	function ab_test($body_class) {

		if (isset($_COOKIE['Thrive_AB_Variation'])) {
			$variation = $_COOKIE['Thrive_AB_Variation'];

			if ($variation == 1) {
				return $body_class;
			} else {
				return;
			}
		} else {
			$num = rand(0, 1);
			if ($num <= 0.5) {
				setcookie('Thrive_AB_Variation', 0, time()+300000);
				return;
			} else {
				setcookie('Thrive_AB_Variation', 1, time()+300000);
				return $body_class;
			}
		}
	}
?>