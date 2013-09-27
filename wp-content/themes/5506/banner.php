<?php
/*
Template Name: Banner
*/
?>

<?php $recent = new WP_Query(array( 'pagename' => 'banner', 'posts_per_page' => 1 )); while($recent->have_posts()) : $recent->the_post();?>

<div class="banner box">
    <?php add_filter ('the_content',  'wpautop'); ?>
    <?php the_content();?>
</div>

<?php endwhile; ?>