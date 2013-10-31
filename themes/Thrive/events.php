<?php
    // template name: Events
	
	get_header();

?>


<div id="blog">
    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

    <div class="major-title">
        <h1 class="opener-text">Thrive Events</h1>
    </div>
    <div class="scalable-container">

        <?php the_content(); ?>

    </div>
         
<?php endwhile; ?>
 
<?php endif; ?>
</div>

<?php get_footer(); ?>