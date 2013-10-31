<?php
	// template name: Our Story

	get_header();
?>


<?php if (have_posts()) : ?><?php while( have_posts() ) : the_post(); ?>
	<div id="about-intro">
	<div class="scalable-container">
		<?php echo split_content('/<!--section-->/', 0); ?>
	</div>
	</div>
	<div id="about-second">
		<div class="scalable-container">
			<?php echo split_content('/<!--section-->/', 1); ?>
		</div>
	</div>
	<div id="about-features">
		<div class="scalable-container">
			<ul id="feature-lister">
				<li>
					<div class="feature-img">
						<img src="<?php bloginfo('template_url'); ?>/Images/new_protein_icon.png" />
					</div>
					<div class="feature-text">
						<?php echo split_content('/<!--section-->/', 2); ?>
					</div>
				</li>
				<li>
					<div class="feature-img">
						<img src="<?php bloginfo('template_url'); ?>/Images/new_fiber_icon.png" />
					</div>
					<div class="feature-text">
						<?php echo split_content('/<!--section-->/', 3); ?>
					</div>
				</li>
				<li>
					<div class="feature-img">
						<img src="<?php bloginfo('template_url'); ?>/Images/new_probiotic_icon.png" />
					</div>
					<div class="feature-text">
						<?php echo split_content('/<!--section-->/', 4); ?>
					</div>
				</li>
			</ul>
			<div id="to-faq">
				<p>Got More Questions?</p>
				<p class=>Check out our <a href="/about/faq">FAQ</a> page or <a href="/connect">ask us a question!</a></p>
			</div>
		</div>
	</div>
	
<?php endwhile ?>
<?php endif ?>

<?php get_footer(); ?>
