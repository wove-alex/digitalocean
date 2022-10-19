<section class="grey">
    <div class="row">
            <?php $featured_posts = get_sub_field('select_story'); if( $featured_posts ): ?>
            <?php foreach( $featured_posts as $post ): setup_postdata($post); ?>
                <?php get_template_part('modules/feature-story-card'); ?>
            <?php endforeach; ?>
            <?php  wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>    


