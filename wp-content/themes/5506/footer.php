<?php

 /* The template for displaying the footer. Contains the closing of the id=main div and all content after. Calls sidebar-footer.php for bottom widgets.

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.0

 */

?>

            <footer class="box">
            	<span class="red">Follow us on:</span>
                <a href="http://www.facebook.com/TownWizard" target="_blank"><img alt="Facebook" src="<?php bloginfo('template_url'); ?>/images/2012/footer/facebook_logo.jpg" /></a>
                <a href="http://www.twitter.com/townwiz" target="_blank"><img alt="Twitter" src="<?php bloginfo('template_url'); ?>/images/2012/footer/twitter_logo.jpg" /></a>
                <a href="http://www.linkedin.com/company/1592698?trk=tyah&trkInfo=tas%3Atownwizard%20llc" target="_blank"><img alt="Linked In" src="<?php bloginfo('template_url'); ?>/images/2012/footer/linkedin_logo.jpg" /></a>
		<a href="http://www.youtube.com/channel/UCrwiyabEFIS0n0e87CB5nTg" target="_blank"><img alt="YouTube" src="<?php bloginfo('template_url'); ?>/images/2012/footer/youtube_logo.jpg" /></a>
            </footer>
	    <ul class="footLinks">
		<li>&copy;<?php echo date('Y'); ?> TownWizard <span>All Rights Reserved</span></li>
                <li><a href="/company">Company</a></li>
		<li><a href="/privacy-policy">Privacy Policy</a></li>
		<li><a href="/terms-of-use">Terms of Use</a></li>
		<li><a href="/contact-us">Contact Us</a></li>
		<li><a href="/careers">Careers</a></li>
		<li><a href="/advertise">Advertise</a></li>
		<li class="bbb"><a target="_blank" title="TownWizard LLC BBB Business Review" href="http://www.bbb.org/new-york-city/business-reviews/marketing-consultants-mobile/townwizard-llc-in-scarsdale-ny-137374/#bbbonlineclick"><img alt="TownWizard LLC BBB Business Review" style="border: 0;" src="http://seal-newyork.bbb.org/seals/black-seal-96-50-townwizard-llc-137374.png" /></a></li>
            </ul>
        </div>
    </div>

    <div id="ContactForm" class="modalForm">
        <?php $recent = new WP_Query(array( 'pagename' => 'contact-us', 'posts_per_page' => 1 )); while($recent->have_posts()) : $recent->the_post();?>

        <div class="formHolder">
            <a class="close"></a>
            <?php remove_filter ('the_content',  'wpautop'); ?>
            <?php the_content();?>
        </div>

        <?php endwhile; ?>
    </div>

    <div id="AdvertiseForm" class="modalForm">
        <?php $recent = new WP_Query(array( 'pagename' => 'advertise-with-us', 'posts_per_page' => 1 )); while($recent->have_posts()) : $recent->the_post();?>

        <div class="formHolder">
            <a class="close"></a>
            <?php remove_filter ('the_content',  'wpautop'); ?>
            <?php the_content();?>
        </div>

        <?php endwhile; ?>
    </div>

    <div id="Darkness"></div>


<?php

	/* Always have wp_footer() just before the closing </body>

	 * tag of your theme, or you will break many plugins, which

	 * generally use this hook to reference JavaScript files.

	 */

	wp_footer();

?>

<!-- Google Code for Remarketing tag -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1011884112;
var google_conversion_label = "iNuoCIiYrAYQ0MDA4gM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1011884112/?value=0&amp;label=iNuoCIiYrAYQ0MDA4gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

</body>

</html>