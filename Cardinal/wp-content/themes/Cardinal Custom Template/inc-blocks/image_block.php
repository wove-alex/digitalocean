<?php if(get_sub_field('image_position') == "Full Width Image block") { ?>
    <section>
        <div class="row">
            <div class="col-12 col">
                <?php $image = get_sub_field('image'); if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </section>      
<?php } ?>

<?php if(get_sub_field('image_position') == "Image Left") { ?>
    <section class="text-and-image-block">
        <div class="row">
            <div class="col-12 col pb-0  tile">
                <div class="border-top w-100"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col">
                <?php $image = get_sub_field('image'); if( !empty( $image ) ): $caption = $image['caption']; ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="rounded img-fluid"/>
                    <p2 class="wp-caption-text"><?php echo esc_html($caption); ?></p2>
                <?php endif; ?>
            </div>
            <div class="col-6 col pr-4 tile pt-0">
                <p class=" tile"><?php the_sub_field('text'); ?></p>        
            </div>
        </div>
    </section>      
<?php } ?>

<?php if(get_sub_field('image_position') == "Image Right") { ?>
    <section class="text-and-image-block">
        <div class="row">
            <div class="col-12 col pb-0  tile">
                <div class="border-top w-100"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col pt-0">
                <p class=" tile"><?php the_sub_field('text'); ?></p>
            </div>
            <div class="col-6 col  tile">

                <?php $image = get_sub_field('image'); if( !empty( $image ) ): $caption = $image['caption']; ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="rounded img-fluid"/>
                    <p2 class="wp-caption-text"><?php echo esc_html($caption); ?></p2>
                <?php endif; ?>
                
            </div>
        </div>
    </section>    
<?php } ?>