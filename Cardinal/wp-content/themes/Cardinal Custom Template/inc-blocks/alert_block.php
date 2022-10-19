<section>
    <div class="row">
        <div class="col col-12 ">

            <div class="row rounded alert-block <?php the_sub_field('block_colour'); ?>">
                <div class="col col-9">
                    <h1 class="mb-0 mt-0"><?php the_sub_field('title'); ?></h1>
                    <p><?php the_sub_field('text_optional'); ?></p>

                    <?php  $link = get_sub_field('page_post_link'); if( $link ): $link_url = $link['url']; $link_title = $link['title']; $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>

                </div>
            </div>
            
        </div>
    </div>
</section> 