<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<?php //get_sidebar(); ?>

<?php
$p4=get_page_by_title('Features'); 
$p5=get_page_by_title('How It Works'); 
$p6=get_page_by_title('Pricing'); 
$p7=get_page_by_title('Partners'); 
$p8=get_page_by_title('FAQ'); 
$p9=get_page_by_title('Contact Us'); 
?>

<div id="Feature" class="box">
            	<div class="copy">
                	<h2>Create Your Community's #1 Mobile Guide Business</h2>
                    <h3>Everything you need to create a local guide for iPhone &amp; Android apps, tablet &amp; the web.</h3>
                </div>
                <div class="homeVideo">

<!--a class="homeVideoHolder"><img alt="TownWizard video" src="<?php bloginfo('template_url'); ?>/images/2013/home-feature.jpg" /></a-->
			
<iframe width="829" height="466" src="//www.youtube.com/embed/NSGYxgqI5DE?rel=0&wmode=opaque" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

<?php get_template_part( 'banner' ); ?>
<?php get_template_part( 'sample-guide' ); ?>
<?php get_template_part( 'promos' ); ?>
<?php get_footer(); ?>