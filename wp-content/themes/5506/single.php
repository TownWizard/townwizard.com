<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="Content" class="box">		

    <h2>Press</h2>
    <div class="pad">
        <div class="leftContent">
<?php if ( have_posts() ) while ( have_posts() ) : the_post();
  $brand = get_post_custom_values('brand');
 ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					

					<h4><?php echo $brand[0]; ?> <?php the_time('n/d/y') ?></h4>
                                        <h3><?php the_title(); ?></h3>
					<div class="entry-content">
                                            <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->
					

					
				</div><!-- #post-## -->

				

				<div style="display:none;"><?php comments_template( '', true ); ?></div>

<?php endwhile; // end of the loop. ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>
