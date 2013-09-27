<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="Content" class="box">		

    <h2>Page Not Found</h2>
    <div class="pad">
        <div class="leftContent">
            <h3>We're sorry, but the page you are looking for cannot be found.</h3>
	</div>
    </div>

</div>

<?php get_template_part( 'banner' ); ?>
<?php get_template_part( 'sample-guide' ); ?>
<?php get_template_part( 'promos' ); ?>
<?php get_footer(); ?>