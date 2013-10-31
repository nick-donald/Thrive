<div id="more-posts-content-container">
	<ul id="more-posts">
		<?php 
			// include wp
			define('WP_USE_THEMES', false);
			require_once('../../../wp-load.php');

			$numPosts = (isset($_GET['numposts'])) ? $_GET['numposts'] : 0;
			$page = (isset($_GET['pageNumber'])) ? $_GET['pageNumber'] : 0;
			$catName = $_GET['catName'];
			$excludePost = (isset($_GET['postID'])) ? $_GET['postID'] : null;
			$count = 0;

			query_posts(array(
				'posts_per_page' => $numPosts,
				'paged' => $page,
				'category_name' => $catName,
				'post__not_in' => array($excludePost)
			));

			if (have_posts()) : while(have_posts()) : the_post(); 
		?>


		<li>
			<div class="more-posts-content">
				<?php 
					$count ++;
					if(has_post_thumbnail()) :
						the_post_thumbnail('thumbnail'); 
					
					else :
				?>
				<img src="http://thrive.dev.srginsight.com/wp-content/uploads/2013/09/Thrive_logo_new_with_descriptors.png" width="150" style="padding:29px 0;" >
				<?php endif; ?>
				<p class="post-date"><?php echo get_the_date(); ?></p>
				<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
			</div>
		</li>
			


		<?php
			endwhile;
			endif;
			wp_reset_query();

			$query = new WP_Query( "category_name={$catName}" );

			$total_posts = $query->found_posts;

			$page = $_GET['pageNumber'];

			$remaining = $total_posts - ($numPosts * ($page - 1) + $count + 1);
		?>
	</ul>
	<script type="text/javascript">
		var remaining = <?php echo $remaining; ?>;
		if (remaining <= 0) { $('.older-posts').hide(); }
	</script>

	<?php wp_reset_query(); ?>
</div>