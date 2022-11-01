<?php
/**
 * Template Name: Work template
 */
?>

<?php 
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container-fluid">
    <div class="pt-100px"></div>
<div class="row pr-2 pl-2">
<?php $count = -1; $related = get_posts( array( 'category_name' => '', 'post_type' => 'Projects', 'numberposts' => 100 ) ); if( $related ) foreach( $related as $post ) { setup_postdata($post); 
        
      ?>        
  
    <?php get_template_part('modules/project-card') ;?>
 
<?php  $count++; } wp_reset_postdata(); ?>

</div>
    
    
    <div class="pt-100px"></div>
 </div>    
<?php get_template_part('layout'); ?>	



<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'hopyard'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>