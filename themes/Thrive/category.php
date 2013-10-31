<?php 

	get_header(); 

?>

<div id="cat-name" style="display:none;">
	<?php echo single_cat_title(); ?>
</div>

<div id="news-container">

	<?php if (have_posts()) : $pc = 0; ?>

		<?php while( have_posts() ) : $pc++; the_post(); ?>

			<?php if ($pc == 1) : ?>

				<div id="latest-news-container">
					<div class="scalable-container">
						<div id="latest-news-info">
							<h1 class="latest-news-header">
								<?php 
									$the_cat = single_cat_title("", false);
									switch ($the_cat) {
										case "News":
											echo "Latest News from Thrive";
											break;

										case "Press":
											echo "Information for the Press";
											break;

										default :
											echo "Default";
											break;
									}
								?>
							</h1>
							<h2 class="latest-news-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
							<span class="latest-news-date"><?php the_date( 'F j, Y' ) ?></span>
							<p class="latest-news-preview">
								<?php 

									$tease = strip_tags(get_the_content());
									echo substr($tease, 0, 200);
									if (strlen($tease) > 200) : echo "..."; endif
								 ?>
							</p>
						</div>
						<div id="latest-news-image">
							<a href="<?php the_permalink() ?>">
								<?php 
									if (has_post_thumbnail()) :
										the_post_thumbnail( 'large' );
				
									else :
								?>
								<img src="<?php bloginfo('template_url'); ?>/Images/Thrive_logo_new_with_descriptors.png" height="300">
								<style>
									#latest-news-image {
										background-color: white;
										padding: 10px 15px 10px 0;
									}
								</style>
								<?php endif; ?>
							</a>
						</div>
					</div>
				</div>
				<span id="post-id" style="display:none;"><?php the_id(); ?></span>
			<?php endif ?>			
		<?php endwhile ?>
	<?php else : ?>
		<h3>No Posts</h3>
	<?php endif ?>
	<div id="other-posts-container">
		<div class="scalable-container">
			<h3 class="more-posts-section-title">
				<?php 
					$the_cat = single_cat_title("", false);
					switch ($the_cat) {
						case "News":
							echo "More Thrive News";
							break;

						case "Press":
							echo "More Press Info";
							break;

						default :
							echo "Default";
							break;
					}
				?>
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
</div>
<?php get_footer(); ?>