<?php
/**
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="Content" class="box">		

<?php

	if ( have_posts() ) : while ( have_posts() ) : the_post();

?>

                  <h2><?php the_title(); ?></h2>
    <div class="pad">
                     <?php the_content(); ?>
    </div>


<?php endwhile; endif;

?>

    <div class="redBar"></div>
</div>

<?php get_footer(); ?>
