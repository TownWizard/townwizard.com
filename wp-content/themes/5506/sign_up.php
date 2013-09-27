<?php
/**
 * Template Name: Sign Up
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

<!--MIDDDLE SECTION STARTS-->
  <div class="MiddleSection">
    
    <div class="middleSecPannel">
    
         <div class="midBoxContainer"> 
         
             <!--INNER MIDDLE LEFT STARTS-->
             <div class="MidLeftCon"> 
             
                <!--CONTAINER STARTS-->
                <div class="Container">
<?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
                  <h1><?php the_title(); ?></h1>
                     <?php wpsb_opt_in(); ?>

<?php endwhile; endif;
?>
                
                </div>
                <!--CONTAINER ENDS-->
                
                
             </div>
             <!--INNER MIDDLE LEFT ENDS-->
             
			<?php get_sidebar(); ?>
             
             
         </div>
         
    </div>
    
  <p class="clear">&nbsp;</p>
  </div>
  <!--MIDDDLE SECTION ENDS-->


<?php get_footer(); ?>