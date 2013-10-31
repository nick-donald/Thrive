<?php 

    if ( is_page( array( 'press', 'news' )))
    {
        $page = $post->post_name;
        $url = home_url();
        wp_redirect("{$url}/category/{$page}");
    }

    elseif ( is_page( 'about' ) ) {
        $url = home_url();
        wp_redirect("{$url}/our-story");
    }

    elseif ( is_page( 'the-scoop' ) ) {
        $url = home_url();
        wp_redirect("{$url}/category/news");
    }
	
	get_header();

?>

    <div id="blog">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
         
        <div class="scalable-container">

            <?php if (is_page( 'faq' )) : 
                $content = split_content( "/(<\/div>)/m" );
                
                $csize = count($content);
                ?>

                <div class="major-title">
                    <h1 class="opener-text">FAQ's</h1>
                </div>

                <?php for ($c = 0; $c < $csize; $c++) : ?>
                    <?php if ($c % 2 == 0) : ?> 
                        <div class="faq">
                            <?php echo $content[$c] ?>
                            <?php echo $content[$c + 1] ?>
                        </div>
                    <?php endif; ?>

                <?php endfor; ?>

            <?php else : the_content() ?>
            <?php endif; ?>
 
                
            <?php endwhile; ?>
            <?php endif; ?>
            <?php if (is_page( 'connect-2' )) { get_sidebar(); }?>

        </div>
    </div> 


<?php get_footer(); ?>