<?php
/*
Template Name: Team Members
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

    <h2>About Us</h2>
    <div class="pad">
        <div id="RightRail">
            
        </div>
        <div class="leftContent">
            <h3>TownWizard Leadership and Board of Directors</h3>
	    <h4>We have built  and led direct sales &amp; direct marketing businesses</h4>
            <div class="mediaCont">
                <?php
                    
                    query_posts('category_name=team_members&order=DESC');
                    
                    if ( have_posts() ) : 
                    //$count=1;
                    while ( have_posts() ) : the_post();
                    $title = get_post_custom_values('title');
                    //if ($count < 4) :
                        //$count++;
                ?>

                <div class="post">
                    <div class="img"><?php the_post_thumbnail( 'single-post-thumbnail' ); ?></div>
                    <div class="cont left">
                    <div><h3 class="inline"><?php the_title(); ?> -</h3> <h4 class="inline"><?php echo $title[0]; ?></h4></div>
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

