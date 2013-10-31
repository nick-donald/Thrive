<?php 
	get_header();
?>


<div id="post-page">
	<div class="scalable-container">
		<?php if (have_posts()) : ?><?php while( have_posts() ) : the_post(); ?>
			<div id="cat-name" style="display:none;">
				<?php 
					$category = get_the_category();
					echo $category[0]->cat_name;
				?>
			</div>
			<h2><?php the_title(); ?></h2>
			<p><?php the_date(); ?></p>
			<!-- <?php the_post_thumbnail( 'medium' ); ?> -->
			<?php the_content(); ?>
		<?php endwhile ?>
		<?php endif ?>
	</div>
</div>
<span id="post-id" style="display:none;"><?php echo get_the_id(); ?></span>
<?php
	if (get_the_category()) : 
	$category = get_the_category();
	$cat = $category[0]->cat_name;
	if ($cat == "News" || $cat == "Press") :
?>
<div id="other-posts-container">
	<div class="scalable-container">
		<h3 class="more-posts-section-title">
			Related Articles
		</h3>
		<div id="posts-load-target"></div>
		<div id="post-load-controls">
			<a href="#" class="add-posts older-posts">
				<i class="icon-chevron-left icon-2x icon-older"></i>
				<span>Older Posts</span>
			</a>
			<a href="#" class="add-posts newer-posts">
				<span>Newer Posts</span>
				<i class="icon-chevron-right icon-2x icon-newer"></i>
			</a>
		</div>
	</div>
</div>

<?php endif; ?>
<?php endif; ?>

<?php get_footer(); ?>