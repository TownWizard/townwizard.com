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

<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('1818-206-10-2440');/*]]>*/</script><noscript><a href="https://www.olark.com/site/1818-206-10-2440/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->

</body>

</html>