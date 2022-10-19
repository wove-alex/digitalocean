<?php get_header(); ?>


<section class="p-0" style="overflow: hidden">
    <picture class="cover img-fluid p-absolute z-index-1 hide-when-small" id="headerimg">
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/home_page_image_1.webp" type="image/webp">
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/home_page_image_1.jpg" type="image/jpeg"> 
	  <img src="<?php echo get_template_directory_uri(); ?>/images/home_page_image_1.jpg" class="cover fadein" alt="Homepage Image (building) Cardinal Capital">
	</picture>

    <picture class="cover img-fluid p-absolute z-index-1 show-when-small" id="headerimg">
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/home_page_image_1.webp" type="image/webp">
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/home_page_image_1.jpg" type="image/jpeg"> 
	  <img src="<?php echo get_template_directory_uri(); ?>/images/home_page_image_1.jpg" class="cover fadein" alt="Homepage Image (building) Cardinal Capital" >
	</picture>

    <div class="shadow"></div>

    <div class="row general-padding z-index-2 white-text full-height-home align-end">
        <div class="col-6 col col-sm-6">
            <h1 class="home"> <?php the_field('header_text'); ?></h1>
            <?php $link = get_field('header_link'); if( $link ):  $link_url = $link['url'];  $link_title = $link['title']; $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                <a class="arrow home-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>
            
                <svg width="28" height="28" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.4574 13.8743C21.8205 13.8743 24.0358 13.9506 25.845 14.1033C22.1158 11.7373 18.0543 7.38685 14.2513 1.73897L16.0605 0.212511C20.2697 6.81443 24.1466 10.8214 29.5742 14.9047L29.5742 15.0955C24.1466 19.1406 20.1959 23.1857 16.0236 29.7876L14.2144 28.2611C18.0174 22.6514 22.042 18.3392 25.7712 15.935C23.962 16.0877 21.7466 16.164 19.4205 16.164L-0.000871655 16.164L-0.000871455 13.8743L19.4574 13.8743Z" fill="#FF661D"/>
                </svg>

            
            </a>
            <?php endif; ?>
        </div>
    </div>
</section> 

<?php if(get_field('intro')) { ?> 
<section class="pb-0">
    <div class="row">
        <div class="col-9 col">
            <p class="intro tile mb-0"><?php the_field('intro'); ?></p>
        </div>
    </div>
</section>    
<?php } ?>

<section class="container">
    <div class="row">
        <div class="col col-6 pb-0 tile">
            <p class="">Impact</p>
        </div>
        <div class="col col-6 pb-0 tile hide-when-med">
        <p>Current Funds</p>
        </div>
    </div>   
    <div class="row">
        <div class="col col-6 col-md-12 ">
            <div class="rounded yellow stat row tile tile">
                <div class="col-6">
                     <p class="mt-0">Enterprise Value</p>
                     <h2>€3bn</h2>
                </div>

                <!-- <div class="col-6">
                     <p class="mt-0">Successful Transactions</p>
                     <h2>70+</h2>
                </div> -->
                
                <div class="col-12">
                     <p2 class="mt-0 mb-0"><a href="#" class="arrow">Read more about our investments

                     <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.8427 8.31484C13.2809 8.31484 14.6292 8.36129 15.7303 8.45419C13.4607 7.01419 10.9888 4.36645 8.67416 0.929033L9.77528 8.1149e-07C12.3371 4.01807 14.6966 6.45677 18 8.94194L18 9.05807C14.6966 11.52 12.2921 13.9819 9.75281 18L8.65168 17.071C10.9663 13.6568 13.4157 11.0323 15.6854 9.56903C14.5843 9.66194 13.236 9.70839 11.8202 9.70839L-1.65845e-06 9.70839L-1.53662e-06 8.31484L11.8427 8.31484Z" fill="black"/>
                        </svg>


                     </a></p2>
                </div>
            </div>
        </div>


            <div class="col col-12 pb-0 tile show-when-med">
            <p>Current Funds</p>
            </div>

            <div class="col col-3 col-md-6 ">
                <a class="rounded teal tile stat row tile top-right-arrow" href="<?php echo get_permalink('56'); ?>">
                    <div class="col-12">
                        <p class="mt-0">Private Equity</p>
                        <h2>+315%</h2>
                    </div>

                    <svg class="top-right-arrow" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.8427 8.31484C13.2809 8.31484 14.6292 8.36129 15.7303 8.45419C13.4607 7.01419 10.9888 4.36645 8.67416 0.929033L9.77528 8.1149e-07C12.3371 4.01807 14.6966 6.45677 18 8.94194L18 9.05807C14.6966 11.52 12.2921 13.9819 9.75281 18L8.65168 17.071C10.9663 13.6568 13.4157 11.0323 15.6854 9.56903C14.5843 9.66194 13.236 9.70839 11.8202 9.70839L-1.65845e-06 9.70839L-1.53662e-06 8.31484L11.8427 8.31484Z" fill="black"/>
                    </svg>

                    <div class="col-12">
                        <p2 class="mt-0 mb-0">Learning Pool, Revenue Growth</p2>
                    </div>
                </a>
            </div>

            <div class="col col-3 col-md-6 ">
                <a class="rounded green tile stat row tile top-right-arrow" href="<?php echo get_permalink('58'); ?>">
                    <div class="col-12">
                        <p class="mt-0">Real Estate</p>
                        <h2>1000+</h2>
                    </div>
                    
                    <svg class="top-right-arrow" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.8427 8.31484C13.2809 8.31484 14.6292 8.36129 15.7303 8.45419C13.4607 7.01419 10.9888 4.36645 8.67416 0.929033L9.77528 8.1149e-07C12.3371 4.01807 14.6966 6.45677 18 8.94194L18 9.05807C14.6966 11.52 12.2921 13.9819 9.75281 18L8.65168 17.071C10.9663 13.6568 13.4157 11.0323 15.6854 9.56903C14.5843 9.66194 13.236 9.70839 11.8202 9.70839L-1.65845e-06 9.70839L-1.53662e-06 8.31484L11.8427 8.31484Z" fill="black"/>
                    </svg>

                    <div class="col-12">
                        <p2 class="mt-0 mb-0">Residential units completed</p2>
                    </div>
                </a>
            </div>
    </div>
</section> 





<section>
    <div class="row">
        <div class=" w-100 col col-12 pb-0">
            <div class="border-top"></div>
        </div>
    </div>
    <div class="row">
        <div class="col col-6">
             <p class=" tile"><?php the_field('title'); ?></p>
        </div>
        <div class="col col-6 pr-4">
            <p  class=" tile"><?php the_field('text_block'); ?></p><br>
        </div>
    </div>

    <div class="row">
        <?php $featured_posts = get_field('stories'); if( $featured_posts ): ?>
            <?php foreach( $featured_posts as $post ):  setup_postdata($post); ?>
                <div class="col col-6 tile">
                    <?php get_template_part('modules/home-story-card'); ?>
                </div>
            <?php endforeach; ?>
            <?php  wp_reset_postdata(); ?>
        <?php endif; ?> 
    </div>
</section>  


<section class="career-block-link">
    <div class="row tile">
        <div class="col col-4 d-flex align-end order-sm-2 arrow-right">
            <a class="border-bottom w-100 p-relative arrow-careers" href="<?php echo home_url(); ?>/careers">
                <h3>
                    Open Expertise
                </h3>
                <p class="mt-0">Meet our people

                <svg width="34" height="33" viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.9128 15.2439C24.5495 15.2439 27.0214 15.329 29.0401 15.4994C24.8791 12.8594 20.3472 8.00516 16.1038 1.70323L18.1225 1.99327e-06C22.8192 7.36645 27.145 11.8374 33.2012 16.3935L33.2012 16.6065C27.145 21.12 22.7368 25.6335 18.0813 33L16.0626 31.2968C20.306 25.0374 24.7967 20.2258 28.9577 17.5432C26.939 17.7135 24.4671 17.7987 21.8716 17.7987L0.20117 17.7987L0.20117 15.2439L21.9128 15.2439Z" fill="#FF7E41"/>
                </svg>

                </p>

                
        </a>

        </div>
        <div class="col-8 col">
            <picture class=" img-fluid  ">
                <source srcset="http://161.35.36.169/wp-content/uploads/2022/10/careers-img.webp" type="image/webp">
                <source srcset="http://161.35.36.169/wp-content/uploads/2022/10/careers-img-1.jpg" type="image/jpeg"> 
                <img src="http://161.35.36.169/wp-content/uploads/2022/10/careers-img-1.jpg" class="cover fadein rounded portrait" alt="Cardinal Image of interview careers">
            </picture>
        </div>
    </div>
</section>    


<section class="green news-block">
    <div class="row">
        <div class=" w-100 col col-12">
                <p class="mt-0 news-title"><?php the_field('title_2'); ?></p>
        </div>
    </div>

    <div class="row">
        <?php $featured_posts = get_field('news'); if( $featured_posts ): ?>
            <?php foreach( $featured_posts as $post ):  setup_postdata($post); ?>
                <div class="col col-12">
                    <?php get_template_part('modules/news-card'); ?>
                </div>
            <?php endforeach; ?>
            <?php  wp_reset_postdata(); ?>
        <?php endif; ?>
        
    </div>
	
	
	
	
	    <div class="row">
        <div class=" w-100 col col-12">
	<br><br>
	<a class="button arrow " href="<?php echo home_url(); ?>/newsroom" >View All News
					<svg width="20" height="20" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.1323 11.459C16.97 11.459 18.6929 11.5183 20.0999 11.6371C17.1998 9.79705 14.0412 6.41383 11.0836 2.02157L12.4906 0.834474C15.764 5.96867 18.779 9.08479 23 12.2603L23 12.4087C18.779 15.5545 15.7066 18.7003 12.4619 23.8345L11.0549 22.6474C14.0125 18.2848 17.1423 14.9312 20.0424 13.0616C18.6355 13.1803 16.9126 13.2396 15.1036 13.2396L-9.81118e-07 13.2396L-8.2545e-07 11.459L15.1323 11.459Z" fill="#000000"/>
        </svg></a>
			  </div>  </div>
</section>  




<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'Base'); ?></p>
<?php endif; ?>

<?php get_template_part('layout'); ?>

<?php get_footer(); ?>