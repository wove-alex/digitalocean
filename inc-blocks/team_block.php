<section class="">
    <div class="row">
        <div class="col col-12">
            <p><?php the_sub_field('title'); ?></p>
        </div>
    </div>   
    <div class="row">
            <?php $featured_posts = get_sub_field('select_team'); if( $featured_posts ): ?>
            <?php foreach( $featured_posts as $post ): setup_postdata($post); ?>
                <div class="col-3 col-sm-6 col">
                    <?php get_template_part('modules/small-people-card'); ?>
                </div>
            <?php endforeach; ?>
            <?php  wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>    


