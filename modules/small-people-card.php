<div class="row arrow small-person-div" >
    <div class="col-12 border-top ">

    </div>
    <div class="col-4 col pl-0 col-sm-4 p-10">

        <?php if(has_post_thumbnail()) { ?> 
            <img class="object-cover rounded img-fluid" src="<?php $coastWork_id = get_post_thumbnail_id(); $coastWork_url = wp_get_attachment_image_src($coastWork_id,"medium", true); echo $coastWork_url[0]; ?>">
        <?php } else { ?>
            <span class="object-cover rounded people-img-small grey"></span>
        <?php } ?>


    </div>
    <div class="col-8 col pl-0 pr-0 col-sm-8 p-10">
        <a href="<?php the_permalink(); ?>">
            <p1 class="mt-0"><?php the_title(); ?><br>
                <span class="grey-text"><?php the_field('job_title'); ?></span>
            </p1>
        </a>



        <?php  $link = get_field('linkedin'); if( $link ):  $link_url = $link['url']; $link_title = $link['title']; $link_target = $link['target'] ? $link['target'] : '_self'; ?>
        <p2><a class="" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.63648 4.73423C9.60944 3.76128 10.553 2.88056 11.3608 2.1985C8.85116 2.75977 5.38769 2.64082 1.49641 1.88123L1.61283 0.507816C6.06414 1.49299 9.31019 1.54654 13.2262 0.993016L13.3047 1.07158C12.7355 4.97184 12.7744 8.26401 13.7747 12.7001L12.4013 12.8165C11.6574 8.94098 11.539 5.50842 12.0846 2.9831C11.4025 3.79086 10.5218 4.73443 9.56403 5.69218L1.56757 13.6886L0.62483 12.7459L8.63648 4.73423Z" fill="#FF661D"/>
            </svg>


        </a></p2>
        <?php endif; ?>

    </div>
</div>

