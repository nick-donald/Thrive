<?php 
	// template name: Map

	get_header();
?>
<div id="map-container">
	<div class="scalable-container">
		<div class="major-title">
			<h1 class="opener-text">Find Thrive near you</h1>
		</div>

		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

			<img id="map-loading" src="http://thriveicecream.com/wp-content/themes/Thrive/Images/ajax-loader.gif" />

			<?php the_content(); ?>
		<?php endwhile ?>
		<?php endif ?>
		<div id="product-request-pdf-container">
			<p class="product-request-text">Can't find Thrive near you?</p>
			<p class="product-request-link">
				<a href="http://thriveicecream.com/wp-content/uploads/2013/09/Thrive_Supermarket_Request_letter.pdf">Click here to download our request form</a>
			</p>
		</div>
	</div>
</div>
<?php get_footer(); ?>