<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>">
	<title><?php bloginfo('name'); ?><?php wp_title( '|', true, 'left' ); ?></title>

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Cabin:400,600,600italic' rel='stylesheet' type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=Lobster|Raleway" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,600' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link href="http://code.jquery.com/mobile/1.3.2/jquery.mobile.structure-1.3.2.min.css">
	<meta name="viewport" content="width=device-width, user-scalable=false, initial-scale=1">
	<?php 

		wp_head( ); 

		wp_get_archives('type=monthly&format=link');
	?>


</head>

<body <?php body_class(); ?> data-ajax="false">
	<div id="mobile-menu">
		<?php wp_nav_menu( array( 'menu_class' => 'mobile-nav', 'exclude' => '40')) ?>
	</div>
	<div id="page">
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