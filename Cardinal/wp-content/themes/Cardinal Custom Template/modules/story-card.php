<a class="row story-card main-story-card" href="<?php the_permalink(); ?>">
    
    <div class="col col-6">
    <div class="border-top"></div>
        <h3 class="mt-0"><?php the_title(); ?><br>
        <span class="grey-text"><?php the_field('sector'); ?></span>
    </h3>
        <p class="arrow">Read more

        <svg width="20" height="20" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.1323 11.459C16.97 11.459 18.6929 11.5183 20.0999 11.6371C17.1998 9.79705 14.0412 6.41383 11.0836 2.02157L12.4906 0.834474C15.764 5.96867 18.779 9.08479 23 12.2603L23 12.4087C18.779 15.5545 15.7066 18.7003 12.4619 23.8345L11.0549 22.6474C14.0125 18.2848 17.1423 14.9312 20.0424 13.0616C18.6355 13.1803 16.9126 13.2396 15.1036 13.2396L-9.81118e-07 13.2396L-8.2545e-07 11.459L15.1323 11.459Z" fill="#FF7E41"/>
        </svg>

        </p>
    </div>
    <div class="col-6 col ">
        <img class="cover rounded img-fluid" src="<?php $coastWork_id = get_post_thumbnail_id(); $coastWork_url = wp_get_attachment_image_src($coastWork_id,"full", true); echo $coastWork_url[0]; ?>">
    </div>
</a>




