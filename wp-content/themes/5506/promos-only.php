<?php
/*
Template Name: Promos Only
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

<?php

	if ( have_posts() ) : while ( have_posts() ) : the_post();

?>

                  <h2><?php the_title(); ?></h2>
    <div class="pad">
<?php remove_filter ('the_content',  'wpautop'); ?>
                     <?php the_content(); ?>
    </div>


<?php endwhile; endif;

?>

    <div class="redBar"></div>
</div>

<?php get_template_part( 'promos' ); ?>
<?php get_footer(); ?>