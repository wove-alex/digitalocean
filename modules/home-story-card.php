<a class="row small-story-card story-card arrow" href="<?php the_permalink(); ?>">
    <div class="w-100 border-top show-when-small"></div>
    <div class="col-6 col-sm-6 col-xs-6 col pl-0 pt-0 order-sm-2 pl-10">
        <div class="w-100 border-top hide-when-small"></div>
        <p class="mt-0"><?php the_title(); ?><br>
        <span class="grey-text"><?php the_field('sector'); ?></span></p>
        <p2>Read more

        <svg  width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.3299 8.34457C12.7058 8.34457 13.9958 8.38901 15.0493 8.4779C12.8778 7.10021 10.5129 4.56706 8.29845 1.2784L9.35192 0.389568C11.8029 4.23375 14.0603 6.56692 17.2207 8.94453V9.05563C14.0603 11.411 11.7599 13.7664 9.33042 17.6106L8.27695 16.7218C10.4914 13.4553 12.8348 10.9444 15.0063 9.54449C13.9528 9.63337 12.6628 9.67781 11.3084 9.67781H-0.000326157V8.34457L11.3299 8.34457Z" fill="#FF661D"/>
        </svg>

        </p2><br>
    </div>
    <div class="col-6 col-sm-6 col-xs-6 order-sm-1 image-div">
        <img class="object-cover rounded img-fluid" src="<?php $coastWork_id = get_post_thumbnail_id(); $coastWork_url = wp_get_attachment_image_src($coastWork_id,"medium", true); echo $coastWork_url[0]; ?>">
    </div>

    <!-- <div class="col-xs-2 show-when-xs order-sm-2">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.3299 8.34457C12.7058 8.34457 13.9958 8.38901 15.0493 8.4779C12.8778 7.10021 10.5129 4.56706 8.29845 1.2784L9.35192 0.389568C11.8029 4.23375 14.0603 6.56692 17.2207 8.94453V9.05563C14.0603 11.411 11.7599 13.7664 9.33042 17.6106L8.27695 16.7218C10.4914 13.4553 12.8348 10.9444 15.0063 9.54449C13.9528 9.63337 12.6628 9.67781 11.3084 9.67781H-0.000326157V8.34457L11.3299 8.34457Z" fill="#FF661D"/>
        </svg>
    </div> -->
</a>




