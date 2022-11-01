<?php 
get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="container-fluid pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php the_title(); ?>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'Base'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>