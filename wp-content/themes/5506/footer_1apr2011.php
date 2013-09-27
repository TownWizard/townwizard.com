<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the id=main div and all content

 * after.  Calls sidebar-footer.php for bottom widgets.

 *

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.0

 */

?>

	 <!--BLUE BOTTOM STARTS-->

  <div class="blueWrapper"> 

    <div class="bluePannel"> 

      <div class="blueContain">

      

           <h2><img src="<?php bloginfo('template_url'); ?>/images/BtmTitleTxt.png" alt=""></h2>

           

           <div class="BtmSliderPannel">

           

             <div class="leftArrow"><a href="#" id="prev2" class=""><img src="<?php bloginfo('template_url'); ?>/images/LEftArrow.png" alt="" height="83" ></a></div>

                  

                  <!--<ul id="mycarousel"> -->

<div id="bottomSlide">

<?php

	query_posts('category_name=testimonial');

		if ( have_posts() ) : 
			$count=1;
		while ( have_posts() ) : the_post();



?>

<?php if($count==1){ ?><div class="MidSlideCon" > <?php } ?>
                  <!-- <li> -->

                   <!--BLUE BOX STARTS-->

                   <div class="midBlueBox">

                    <div class="midBlueBg">

                          <div class="SlideCon">

                          <h1><?php the_title(); ?></h1>

                          <?php the_content(''); ?>

                          </div>

                    </div>                     

                   </div>

                   <!--BLUE BOX ENDS-->

                   <!--</li> -->
<?php if($count==2){ ?></div><?php } ?>

<?php $count++;
if($count==3)
	$count=1;
		endwhile; endif;

wp_reset_query();

?>               

                  <!-- </ul> -->

 </div>

                  

                  <div class="rightArrow"><a href="#" id="next2"><img src="<?php bloginfo('template_url'); ?>/images/RightArrrow.png" alt=""></a></div>

                  

         <p class="clear">&nbsp;</p>

        </div> 

        

      <p class="clear">&nbsp;</p>     

      </div> 

    </div> 

  </div>

  <!--BLUE BOTTOM ENDS-->  

  

  <!--FOOTER WRAPPER STARTS-->

  <div class="footerWrapper">

    

    <div class="footerPannel">

    

       <!--FOOTER LEFT STARTS-->

      <div class="footerLeft">

        <h1><img src="<?php bloginfo('template_url'); ?>/images/feactureImg.png" alt=""></h1>

        <?php dynamic_sidebar('Footer Images Widget Area'); ?>

       </div>

       <!--FOOTER LEFT ENDS-->

       

       <!--FOOTER RIGHT STARTS-->

       <div class="footerRight"> 

         <h3>Questions? 1-866-651-0001</h3>

         <a href="legal-documentation"><h4>©2011 TownWizard, Inc.</h4></a>

       </div>

       <!--FOOTER RIGHT ENDS-->

       

    <p class="clear">&nbsp;</p>   

    </div>

  <p class="clear">&nbsp;</p>

  </div>

  <!--FOOTER WRAPPER ENDS-->



 <script type="text/javascript">

		

			$("#default-usage-select").selectbox();

		

		</script>





<?php

	/* Always have wp_footer() just before the closing </body>

	 * tag of your theme, or you will break many plugins, which

	 * generally use this hook to reference JavaScript files.

	 */



	wp_footer();

?>

</body>

</html>

