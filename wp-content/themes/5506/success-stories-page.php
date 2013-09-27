<?php
/*
Template Name: Success Stories Page
*/
?>

<?php

/**

 * The template for displaying all pages.

 *

 * This is the template that displays all pages by default.

 * Please note that this is the wordpress construct of pages

 * and that other 'pages' on your wordpress site will use a

 * different template.

 *

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.0

 */



get_header(); ?>

<div id="Content" class="box">		

    <h2>Press</h2>
    <div class="pad">
        <div id="RightRail" class="noborder">
            
        </div>
        <div class="leftContent">
            <h3>Success Stories</h3>
            <div class="mediaCont">
                <?php
                    
                    query_posts('category_name=success_stories');
                    
                    if ( have_posts() ) : 
                    //$count=1;
                    while ( have_posts() ) : the_post();
                    $brand = get_post_custom_values('brand');
                    //if ($count < 4) :
                        //$count++;
                ?>

                <div class="post">
                    <div class="img"><?php the_post_thumbnail( 'single-post-thumbnail' ); ?></div>
                    <div class="cont left">
                    <h4><?php echo $brand[0]; ?></h4>
                    <h3><?php the_title(); ?></h3>
                    <?php remove_filter ('the_content',  'wpautop'); ?>
                    <?php the_content(''); ?>
                    </div>
                    <div class="clear"></div>
                </div>

                <?php /*endif;*/ endwhile; endif; wp_reset_query(); ?>
            </div>
        </div>
    </div>
    <div class="redBar"></div>
</div>

<?php get_footer(); ?>

