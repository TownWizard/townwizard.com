<?php
/*
Template Name: Sample Guide
*/
?>

<?php $recent = new WP_Query(array( 'pagename' => 'sample-guide', 'posts_per_page' => 1 )); while($recent->have_posts()) : $recent->the_post();?>

<?php remove_filter ('the_content',  'wpautop'); ?>
<?php the_content();?>

<?php endwhile; ?>