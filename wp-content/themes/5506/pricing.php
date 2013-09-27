<?php
/*
Template Name: Pricing
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

                  <h2><?php the_title(); ?></h2>

                     <?php the_content(); ?>



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

<div style='display:none;'>
<!-- Google Code for Pricing page Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1011884112;
var google_conversion_language = "en";
var google_conversion_format = "1";
var google_conversion_color = "ffffff";
var google_conversion_label = "d8cZCLCfhwIQ0MDA4gM";
var google_conversion_value = 0;
if (1) {
google_conversion_value = 1;
}
/* ]]>*/
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1011884112/?value=1&label=d8cZCLCfhwIQ0MDA4gM&guid=ON&script=0"/>
</div>
</noscript>
</div>
<?php get_footer(); ?>