<?php
/*
Template Name: Promos
*/
?>

<div class="promo box">
            	<h4>Testimonials</h4>
                <div id="Testimonials">
                    <ul>
<?php
                    
                        query_posts('category_name=testimonial');
                    
                            if ( have_posts() ) : 
                                $count=1;
                            while ( have_posts() ) : the_post();
                    ?>
                        <li>
                            <div class="left testImg">
                                <?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
                            </div>
                            <?php remove_filter ('the_content',  'wpautop'); ?>
                            <?php the_content(''); ?>
                            <br /><br />
                            <strong>
                            <?php the_title(); ?>
                            </strong>
                        </li>
                        
<?php endwhile; endif; wp_reset_query(); ?>

                    </ul>
                </div>
            </div>
            <div class="promo box">
            	<h4>Featured in:</h4>
                <div class="ctr">
                    <a href="/press"><img alt="Featured in" src="<?php bloginfo('template_url'); ?>/images/2012/footer/featured_logos.jpg" /></a>
            	</div>
            </div>
            <div class="promo box nomarg">
            	<h4>As seen on <img width="156" alt="CNNMoney.com" src="<?php bloginfo('template_url'); ?>/images/2013/cnnmoney-logo.jpg" valign="middle" /></h4>
                <iframe width="276" height="155" src="//www.youtube.com/embed/vuz-LHp9Lzg?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>