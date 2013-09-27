<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php
	$p1=get_page_by_title('Partners');
	$p1=get_page_by_title('Sign Up');
        $p1=get_page_by_title('New partner');
?>
		<!--INNER MIDDLE RIGHT STARTS-->
             <div class="MidRightCon"> 
             
                <h1>Ready to have the <br>
                first mobile guide <br>
                for your town? </h1>
                
                <!--ORANGE BUTTON STARTS-->
                <div class="orangeBtnBox">
                 <div class="rightOrBtn">
                  <a href="<?php echo get_page_link($p1->ID); ?>">SIGN UP!</a>
                 </div>
                </div>
                <!--ORANGE BUTTON ENDS-->
                
                <!--OR IMG STARTS-->
                <!-- <div class="midDesign">
                 <ul>
                  <li class="fltlft"><img src="<?php echo bloginfo('template_url'); ?>/images/leftDe.png" alt=""></li>
                  <li> OR </li>
                  <li class="fltrt"><img src="<?php echo bloginfo('template_url'); ?>/images/RightDe.png" class="nopad" alt=""></li>
                 </ul>
                <p class="clear">&nbsp;</p>
                </div> -->
                <!--OR IMG ENDS-->
                
                <!--MAP BOX STARTS-->
                <!-- <div class="mapBox">
                 <h3>Check to see if your <br>
                    town is available.</h3>
					<div class="mapImgBg">
                      <a href="/partners"><img src="<?php echo bloginfo('template_url'); ?>/images/mapImg.png" alt=""></a>
                 </div>
                 
                </div> --> 
                <!--MAP BOX ENDS-->
                
             </div>  
             <!--INNER MIDDLE RIGHT ENDS-->