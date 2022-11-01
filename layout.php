 <?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>



<?php if(get_row_layout() == "text_block"): ?>

<?php get_template_part('inc-blocks/text_block'); ?>

<?php elseif(get_row_layout() == "investment_areas_block"): ?>

<?php get_template_part('inc-blocks/investment_areas_block'); ?>

<?php elseif(get_row_layout() == "stats-block"): ?>

<?php get_template_part('inc-blocks/stats-block'); ?>

<?php elseif(get_row_layout() == "featured_story"): ?>

<?php get_template_part('inc-blocks/featured_story'); ?>

<?php elseif(get_row_layout() == "team_block"): ?>

<?php get_template_part('inc-blocks/team_block'); ?>

<?php elseif(get_row_layout() == "logo_block"): ?>

<?php get_template_part('inc-blocks/logo_block'); ?>

<?php elseif(get_row_layout() == "alert_block"): ?>

<?php get_template_part('inc-blocks/alert_block'); ?>

<?php elseif(get_row_layout() == "value_block"): ?>

<?php get_template_part('inc-blocks/value_block'); ?>

<?php elseif(get_row_layout() == "image_block"): ?>

<?php get_template_part('inc-blocks/image_block'); ?>

<?php endif; ?>

<?php endwhile; else : ?>
 

<?php endif; ?>