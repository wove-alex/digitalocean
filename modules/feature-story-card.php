<a class="row arrow" href="<?php the_permalink(); ?>">
    <div class="col-6 col d-flex align-end">
        <div class="w-100 border-bottom">
            <p class="mb-0">Partner Stories</p>
                <h3 class="mt-0 mb-0"><?php the_title(); ?></h3>
            
            <p>Find out more
                <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.1323 11.4141C16.97 11.4141 18.6929 11.4734 20.0999 11.5921C17.1998 9.75213 14.0412 6.36891 11.0836 1.97665L12.4906 0.789551C15.764 5.92374 18.779 9.03987 23 12.2154L23 12.3637C18.779 15.5096 15.7066 18.6554 12.4619 23.7895L11.0549 22.6025C14.0125 18.2399 17.1423 14.8863 20.0424 13.0166C18.6355 13.1354 16.9126 13.1947 15.1036 13.1947L-6.50839e-07 13.1947L-4.9517e-07 11.4141L15.1323 11.4141Z" fill="#FF7E41"/>
                </svg>
            </p>
 
        </div>    
    </div>
    <div class="col-6 col">
        <img class="object-cover rounded img-fluid" src="<?php $coastWork_id = get_post_thumbnail_id(); $coastWork_url = wp_get_attachment_image_src($coastWork_id,"full", true); echo $coastWork_url[0]; ?>">
    </div>
</a>




