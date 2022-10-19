<section>
    <section class="p-20 grey rounded">
        <div class="row">
            <div class="col-6">
                <p>Values</p>
            </div>
            <div class="col-6">
                <p>Cardinal is a highly experienced team working together with a shared set of values that guides our decisions, culture and relationships</p>
                <br><br>
            </div>
        </div>

    <?php  if( have_rows('values', 38) ):  while( have_rows('values', 38) ) : the_row(); ?>

    <?php // Provides: Hll Wrld f PHP
    $value = get_sub_field('title');
    $valueid = str_replace(' ', '', $value); ?>

        <a class="row values-row" href="<?php echo home_url(); ?>/values#<?php echo $valueid; ?>">
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
                <svg class="ml-auto d-block" width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.7378 14.1715C22.1348 14.1715 24.382 14.249 26.2172 14.4038C22.4345 12.0038 18.3146 7.59089 14.4569 1.86186L16.2921 0.313474C20.5618 7.01025 24.4944 11.0748 30 15.2167V15.4102C24.4944 19.5135 20.4869 23.6167 16.2547 30.3135L14.4195 28.7651C18.2772 23.0748 22.3596 18.7006 26.1423 16.2619C24.3071 16.4167 22.0599 16.4941 19.7004 16.4941L-1.38111e-06 16.4941V14.1715L19.7378 14.1715Z" fill="#FF7E41"/>
                </svg>

            </div>
        </a>
    <?php  endwhile; else : endif; ?>
    </section>
</section>  