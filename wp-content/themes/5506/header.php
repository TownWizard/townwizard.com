<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.0

 */

?><!DOCTYPE html>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title><?php

	/*

	 * Print the <title> tag based on what is being viewed.

	 * We filter the output of wp_title() a bit -- see

	 * twentyten_filter_wp_title() in functions.php.

	 */

	wp_title( '|', true, 'right' );



	?></title>




<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/core.css" />
<link href="https://fast.fonts.com/cssapi/42cf40d5-3ee9-4947-b52b-c78f6b86aed9.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jcarousellite_1.0.1.pack.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/tw.js"></script>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<!--[if IE 6]>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/supersleight-min.js"></script>

<![endif]-->



<script type="text/javascript">



		function clearText(field){



		if (field.defaultValue == field.value) field.value = '';

		else if (field.value == '') field.value = field.defaultValue;

		}
		

</script>




<?php

	/* We add some JavaScript to pages with the comment form

	 * to support sites with threaded comments (when in use).

	 */

	if ( is_singular() && get_option( 'thread_comments' ) )

		wp_enqueue_script( 'comment-reply' );



	/* Always have wp_head() just before the closing </head>

	 * tag of your theme, or you will break many plugins, which

	 * generally use this hook to add elements to <head> such

	 * as styles, scripts, and meta tags.

	 */

	wp_head();

?>

<script src="//cdn.optimizely.com/js/331434433.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-31932515-3', 'townwizard.com');
  ga('send', 'pageview');

</script>

</head>

<?php 
$page = str_replace(array('/', '.php', '?s='), '', $_SERVER['REQUEST_URI']); 
$page = $page ? $page : 'default'; 
?>

<body id="<?php echo $page ?>">


  <div id="TopBG"></div>
    <div id="Container">
    	<header id="MainHead">
            <h1><a href="/">TownWizard</a></h1>
            <h2>1-866-651-0001</h2>
	    <nav id="TopNav">
            	<div id="ContactNav">
                    <a class="redNav contactLink"><span>Contact Us</span></a>
		    <a class="redNav grayNav" href="/sign-up"><span>Sign Up</span></a>
                </div>
            </nav>
            <nav id="MainNav">
            	<ul>
                    <li><a href="/how-it-works">How It Works</a></li>
                    <li><a href="/features">Features</a></li>
		    <li><a href="/pricing">Pricing</a></li>
                    <li><a href="/locations">Sample Guides</a></li>
                    <li><a href="javascript:void();">Learn More</a>
			<ul class="sub">
			    <li><a href="/faq">FAQs</a></li>
			    <li><a href="/contact-us">Contact Us</a></li>
                            <li><a href="/team">Team</a></li>
			    <li><a href="/press">Press</a></li>
                        </ul>
		    </li>
                    <li><a class="partner" target="_blank" href="http://cs.townwizard.com"><span>Partner Login</span></a></li>
                </ul>
            </nav>
        </header>
        <div id="MainContent">