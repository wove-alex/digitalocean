<section>
    <div class="row">
        <div class=" col col-12  tile">
            <div class="border-top w-100"></div>
        </div>
    </div>
    <div class="row">
        <div class="col col-12">
            <p class=" tile"><?php the_sub_field('title'); ?></p>
        </div>
    </div>
</section>    

<section class="pt-0">
    <div class="row">


    <?php if( have_rows('logos') ): while( have_rows('logos') ) : the_row(); ?>
        <div class="col col-2 col-sm-4 col-xs-6 tile">
            <?php if(get_sub_field('link_optional')) { ?><a href="<?php the_sub_field('link_optional'); ?>" target="_blank" rel="no-opener" class="m-auto"> <?php } ?>
                <?php $image = get_sub_field('logo_image'); if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php the_title(); ?> – <?php echo esc_attr($image['alt']); ?>" class="img-fluid m-auto logo-image"/>
                <?php endif; ?>
            <?php if(get_sub_field('link_optional')) { ?></a><?php } ?>
            
        </div>
    <?php endwhile; else : endif; ?>


    </div>
</section>    