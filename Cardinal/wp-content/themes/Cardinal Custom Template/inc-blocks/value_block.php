<section>
    
        <div class="row">
            <div class="col-6">
                <p>Values</p>
            </div>
            <div class="col-6">
                <p>The Cardinal team are experienced professionals working together with a shared set of values guiding investment decisions, culture and relationships</p>
                <br><br>
            </div>
        </div>
        <section class="p-20 grey rounded">
            
    <?php  if( have_rows('values', 38) ):  while( have_rows('values', 38) ) : the_row(); ?>

    <?php // Provides: Hll Wrld f PHP
    $value = get_sub_field('title');
    $valueid = str_replace(' ', '', $value); ?>

        <div class="row values-row" >
            <div class="col-12">
                <div class="border-top"></div>
            </div>
            <div class="col-1">

            <?php 
            $image = get_sub_field('icon');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="icon"/>
            <?php endif; ?>

            </div>
            <div class="col-5">
                <p><?php the_sub_field('title'); ?></p>
            </div>
            <div class="col-6">
                <p><?php the_sub_field('main_text'); ?></p>
            </div>
            </div>
    <?php  endwhile; else : endif; ?>
    </section>
</section>  