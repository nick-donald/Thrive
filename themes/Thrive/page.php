<?php 
    define('DONOTCACHEPAGE', true);

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

    elseif (is_page( 'store') ) {
        wp_redirect("http://www.icecreamsource.com/Thrive-Frozen-Nutrition_c_408.html");
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
                    <h1 class="opener-text">FAQs</h1>
                </div>
                <div id="faq-container">
                <?php for ($c = 0; $c < $csize; $c++) : ?>
                    <?php if ($c % 2 == 0) : ?> 
                        <div class="faq">
                            <?php echo $content[$c] ?>
                            <?php echo $content[$c + 1] ?>
                        </div>
                    <?php endif; ?>

                <?php endfor; ?>
                </div>

            <?php else : the_content() ?>
            <?php endif; ?>
            <?php if (is_page( 'connect-2' )) { get_sidebar( 'facebook' ); }?>

            <div id="more-thrive" class="clearfix">
                <ul id="add-ons">
                    <?php get_sidebar( 'map' ); get_sidebar( 'intuit' ); ?>
                </ul>
            </div>
 
        </div>
    </div>     
<?php endwhile; ?>
<?php endif; ?>

<form name="form10" action="/wordpress/coupons/" method="post" id="form10" enctype="multipart/form-data" onsubmit="check_required('submit', '10'); return false;">
    <input type="hidden" id="counter10" value="5" name="counter10">
    <input type="hidden" value="type_text" name="1_type10" id="1_type10">
    <input type="hidden" value="no" name="1_required10" id="1_required10">
    <input type="hidden" value="no" name="1_unique10" id="1_unique10">
    <input type="text" class="input_deactive" id="1_element10" name="1_element10" value="" title="" onfocus="delete_value('1_element10')" onblur="return_value('1_element10')" onchange="change_value('1_element10')" style="width: 200px;">
    <input type="hidden" value="type_text" name="2_type10" id="2_type10">
    <input type="hidden" value="no" name="2_required10" id="2_required10">
    <input type="hidden" value="no" name="2_unique10" id="2_unique10">
    <input type="text" class="input_deactive" id="2_element10" name="2_element10" value="" title="" onfocus="delete_value('2_element10')" onblur="return_value('2_element10')" onchange="change_value('2_element10')" style="width: 200px;">
    <input type="hidden" value="type_text" name="3_type10" id="3_type10">
    <input type="hidden" value="no" name="3_required10" id="3_required10">
    <input type="hidden" value="no" name="3_unique10" id="3_unique10">
    <input type="text" class="input_deactive" id="3_element10" name="3_element10" value="" title="" onfocus="delete_value(&quot;3_element10&quot;)" onblur="return_value(&quot;3_element10&quot;)" onchange="change_value(&quot;3_element10&quot;)" style="width: 200px;">
    <button type="button" id="4_element_submit10" value="Submit" onclick="check_required('submit', '10');">Submit</button>
</form>


<?php get_footer(); ?>