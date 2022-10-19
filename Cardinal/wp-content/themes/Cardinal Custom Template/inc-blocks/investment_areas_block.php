 
<section class="container">
    <div class="row">
        <div class="col-12 col pb-0">
            <div class="border-top pb-0 w-100"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col pt-0">
            <p class=""><?php the_sub_field('title'); ?></p>
        </div>

    </div>


    <div class="row">
        <div class="col col-6 col-md-12">
            <a class="rounded teal stat row tile top-right-arrow"  href="<?php echo get_permalink('56'); ?>">
                    <div  class="col-12">
                        <p class="mt-0">Private Equity</p>
                        <?php if(get_sub_field('type_of_block') == "Descriptions") { ?> 
                        <p><br> With a focus on mid-market businesses ready to scale and accelerate growth.  </p>  <?php } ?> 
                    </div>             

                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8427 8.31484C13.2809 8.31484 14.6292 8.36129 15.7303 8.45419C13.4607 7.01419 10.9888 4.36645 8.67416 0.929033L9.77528 8.1149e-07C12.3371 4.01807 14.6966 6.45677 18 8.94194L18 9.05807C14.6966 11.52 12.2921 13.9819 9.75281 18L8.65168 17.071C10.9663 13.6568 13.4157 11.0323 15.6854 9.56903C14.5843 9.66194 13.236 9.70839 11.8202 9.70839L-1.65845e-06 9.70839L-1.53662e-06 8.31484L11.8427 8.31484Z" fill="black"/>
                        </svg>
                <?php if(get_sub_field('type_of_block') == "Stats") { ?> 
                    <div class="col col-6 col-sm-6">
                        <h2 class="mb-0">+315%</h2>
                        <p2>Learning Pool, Revenue Growth</p2>
                    </div>

                    <div class="col col-6 col-sm-6">
                        <h2 class="mb-0">+92%</h2>
                        <p2>Lily O’Brien’s, EBITDA Growth </p2>
                    </div>
                <?php } ?>
            </a>
        </div>

            <div class="col col-6 col-md-12  ">
                <a class="rounded green stat row tile top-right-arrow" href="<?php echo get_permalink('58'); ?>">
                    <div  class="col-12">
                        <p class="mt-0">Real Estate</p>
                        <?php if(get_sub_field('type_of_block') == "Descriptions") { ?> 
                        <p><br>  With a focus on whole loan or mezzanine funding for ambitious real estate projects. </p>  <?php } ?> 
                    </div>             

                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8427 8.31484C13.2809 8.31484 14.6292 8.36129 15.7303 8.45419C13.4607 7.01419 10.9888 4.36645 8.67416 0.929033L9.77528 8.1149e-07C12.3371 4.01807 14.6966 6.45677 18 8.94194L18 9.05807C14.6966 11.52 12.2921 13.9819 9.75281 18L8.65168 17.071C10.9663 13.6568 13.4157 11.0323 15.6854 9.56903C14.5843 9.66194 13.236 9.70839 11.8202 9.70839L-1.65845e-06 9.70839L-1.53662e-06 8.31484L11.8427 8.31484Z" fill="black"/>
                        </svg>
                <?php if(get_sub_field('type_of_block') == "Stats") { ?>        
                    <div class="col col-6 col-sm-6">
                        <h2 class="mb-0">1,000+</h2>
                        <p2>Residential units completed to date</p2>
                    </div>

                    <div class="col col-6 col-sm-6">
                        <h2 class="mb-0">2.6m<span> sq. ft.</span></h2>
                        <p2>Retail space financed to date</p2>
                    </div>
                    <?php } ?>    
                </a>
            </div>
    </div>

    <div class="row">
        <div class="col-12 col">
             <p class="mt-0 mb-0">
             <?php $link = get_sub_field('link'); if( $link ):  $link_url = $link['url']; $link_title = $link['title']; $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                <a class="arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>

                    <svg class="top-right-arrow" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.8427 8.31484C13.2809 8.31484 14.6292 8.36129 15.7303 8.45419C13.4607 7.01419 10.9888 4.36645 8.67416 0.929033L9.77528 8.1149e-07C12.3371 4.01807 14.6966 6.45677 18 8.94194L18 9.05807C14.6966 11.52 12.2921 13.9819 9.75281 18L8.65168 17.071C10.9663 13.6568 13.4157 11.0323 15.6854 9.56903C14.5843 9.66194 13.236 9.70839 11.8202 9.70839L-1.65845e-06 9.70839L-1.53662e-06 8.31484L11.8427 8.31484Z" fill="black"/>
                    </svg>
                </a>
                <?php endif; ?>
                                                        
             </p>
        </div>
    </div>

</section> 











