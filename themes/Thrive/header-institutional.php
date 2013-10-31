<?php 
	// require_once('wp-content/phpab.php');
	
	// $header_variation = new phpab('header_variation');
	// $header_variation->add_variation('header_variation');

	$variation_class = ab_test('header-variation');
	$variation_class == 'header-variation' ? $ga_value = "yes" : $ga_value = "no";
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<title>Thrive Ice Cream<?php wp_title( '|', true, 'left' ); ?></title>

	<!-- IE conditionals & HTML5 Shiv -->
	
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="http://thrive.dev.srginsight.com/wp-content/themes/Thrive/ie6-and-up.css">
		<script src="http://thriveicecream.com/wp-content/themes/Thrive/JS/html5shiv.js"></script>
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="/wp-content/themes/Thrive/font-awesome-ie7.min.css">
	<![endif]-->
	<!--[if gte IE 9]><!-->        
    	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<!--<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Cabin|PT+Sans|Merriweather+Sans' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link href="http://code.jquery.com/mobile/1.3.2/jquery.mobile.structure-1.3.2.min.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
	<?php 

		wp_head( ); 

		wp_get_archives('type=monthly&format=link');
	?>
	<!-- Remove GA code for staging server -->
	<!-- <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-44081234-1', 'thriveicecream.com');
	  ga('send', 'pageview');

	</script> -->

	<!-- Add staging test GA code -->
	<script>

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-44799249-1']);
	  _gaq.push(['_setCustomVar', 1, 'Thrive AB Variaion', <?php echo "'" .$ga_value. "'"; ?>, 1]);
	  _gaq.push(['_setCustomVar',
	      2,                   // This custom var is set to slot #1.  Required parameter.
	      'Items Removed',     // The name acts as a kind of category for the user activity.  Required parameter.
	      'Yes',               // This value of the custom variable.  Required parameter.
	      2                    // Sets the scope to session-level.  Optional parameter.
	   ]);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	<script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/Thrive/JS/thrive_institutional.js"></script>
</head>

<body <?php body_class(); ?> data-ajax="false">
	<div id="mobile-menu">
		<?php wp_nav_menu( array( 'menu_class' => 'mobile-nav', 'exclude' => '40')) ?>
	</div>
	<div id="page" class=<?php echo $variation_class; ?>>
		<header class="header-container">
			<div id="header">
			<div class="pull-left">
				<div id="mobile-menu-trigger">
					<a href="#"><i class="icon-reorder icon-3x" id="mobile-menu-icon"></i></a>
				</div>
			</div>
				<div class="logo-container">
					<a href="<?php bloginfo('url'); ?>">
						<div class="logo">
							<!-- <img src="<?php bloginfo('template_url'); ?>/Images/Thrive_logo_w_tagline.png"> -->
							<img src="<?php bloginfo('template_url'); ?>/Images/Thrive_logo_new_no_descriptors.png">
						</div>
					</a>
				</div>
				<div class="pull-right">
					<nav id="desktop-menu">
						<?php wp_nav_menu( array( 'menu_class' => 'nav-menu', 'exclude' => '40')) ?>
					</nav>
				</div>
			</div>
		</header>