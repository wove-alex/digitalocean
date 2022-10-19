<?php 
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php get_template_part('layout'); ?>	

<?php woocommerce_content(); ?>	


<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'Base'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>