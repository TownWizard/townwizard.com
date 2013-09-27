<?php
/**
 * Template Name: Partners
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
         
              <!--Inner Container STARTS -->
              <div class="innerContainer">
               <?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
                  <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>    
<?php endwhile; endif;
?>
        
              <p class="clear">&nbsp;</p>
              </div>
              <!--Inner Container ENDS -->
             
         </div>
         
    </div>
    
  <p class="clear">&nbsp;</p>
  </div>
  <!--MIDDDLE SECTION ENDS-->

<?php get_footer(); ?>