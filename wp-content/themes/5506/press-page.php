<?php
/*
Template Name: Press Page
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
        <div id="RightRail" class="noborder wide">
            <div><img src="/wp-content/themes/5506/images/2013/devices-small.jpg" alt="" /></div>
	    <div class="space"></div>
	    <div class="video"><iframe width="254" height="172" src="//www.youtube.com/embed/vuz-LHp9Lzg?rel=0" frameborder="0" allowfullscreen></iframe></div>
	    <p class="videoCaption">Watch this CNN Money video to learn more about TownWizard.</p>
        </div>
        <div class="leftContent">
            <h3>Media Features</h3>
            <div class="mediaCont">
                <?php
                    
                    query_posts('category_name=media_features');
                    
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
                    <h4><?php echo $brand[0]; ?> <?php the_time('n/d/y') ?></h4>
                    <h3><?php the_title(); ?></h3>
                    <?php remove_filter ('the_excerpt',  'wpautop'); ?>
                    <?php the_excerpt(''); ?>
                    </div>
                    <div class="clear"></div>
                </div>

                <?php /*endif;*/ endwhile; endif; wp_reset_query(); ?>
            </div>
            <h3>News</h3>
            <div class="newsCont">
                <?php
                    
                    query_posts('category_name=news');
                    
                    if ( have_posts() ) : 
                    while ( have_posts() ) : the_post();
                ?>

                <div class="post">
                    <div class="cont">
                    <h4><?php the_time('n/d/y') ?></h4>
                    <h3><?php the_title(); ?></h3>
                    <?php remove_filter ('the_excerpt',  'wpautop'); ?>
                    <?php the_excerpt(''); ?>
                    </div>
                </div>

                <?php endwhile; endif; wp_reset_query(); ?>
            </div>
        </div>
    </div>
    <div class="redBar"></div>
</div>

<?php get_footer(); ?>