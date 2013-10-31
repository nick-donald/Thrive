<?php
	// template name: Coupons

	get_header();

?>

<div id="blog">
	<div class="scalable-container">
		<div class="major-title">
			<h1 class="opener-text">
				Thrive Coupons
			</h1>
		</div>
		<div id="coupon-img">
		</div>
	</div>
	<div id="coupon-form">
		<?php if (have_posts()) :  ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile ?>
		<?php endif ?>
	</div>
</div>

<?php

	get_footer();

?>