<?php 
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if(is_page(array('16', '10'))) { ?> 
<section class="p-0 ">
<picture class="cover img-fluid p-absolute z-index-1" id="headerimg">
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/home_page_image_1.webp" type="image/webp">
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/home_page_image_1.jpg" type="image/jpeg"> 
	  <img src="<?php echo get_template_directory_uri(); ?>/images/home_page_image_1.jpg" class="cover fadein">
	</picture>

    <div class="row general-padding z-index-2 white-text page-header">
        <div class="col-12 col align-end">
            <h1 class="mb-0  tile"><?php the_title(); ?></h1>
        </div>
    </div>
</section> 

<section >
    <div class="row">
        <div class=" col col-9">
            <p class="intro mb-0 mt-0 tile"><?php the_field('intro'); ?></p>
        </div>
    </div>
</section>    


<?php } else if(is_page('56')) { ?> 

<section class="p-0 ">
<picture class="cover img-fluid p-absolute z-index-1" id="headerimg">
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/private_equity.webp" type="image/webp">
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/private_equity.jpg" type="image/jpeg"> 
	  <img src="<?php echo get_template_directory_uri(); ?>/images/private_equity.jpg" class="cover fadein">
	</picture>

    <div class="row general-padding z-index-2 white-text page-header">
        <div class="col-12 col align-end">
            <h1 class="mb-0  tile"><?php the_title(); ?></h1>
        </div>
    </div>
</section> 

<section >
    <div class="row">
        <div class=" col col-9">
            <p class="intro mb-0 mt-0 tile"><?php the_field('intro'); ?></p>
        </div>
    </div>
</section>  

<?php } else if(is_page('58')) { ?> 

<section class="p-0 ">
<picture class="cover img-fluid p-absolute z-index-1" id="headerimg">
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/real_estate.webp" type="image/webp">
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/real_estate.jpg" type="image/jpeg"> 
	  <img src="<?php echo get_template_directory_uri(); ?>/images/real_estate.jpg" class="cover fadein">
	</picture>

    <div class="row general-padding z-index-2 white-text page-header">
        <div class="col-12 col align-end">
            <h1 class="mb-0  tile"><?php the_title(); ?></h1>
        </div>
    </div>
</section> 

<section >
    <div class="row">
        <div class=" col col-9">
            <p class="intro mb-0 mt-0 tile"><?php the_field('intro'); ?></p>
        </div>
    </div>
</section>  


<?php } else if(is_page('146')) { ?> 

    <section class="page-header text-header">
    <div class="row">
        <div class=" col col-7">
            <h1><?php the_title(); ?></h1>
            <p class="intro mb-0 tile"><?php the_field('intro'); ?></p>
        </div>
    </div>
</section>  

<section class="">


    <div class="row">
         <?php $featured_posts = get_field('featured'); if( $featured_posts ): ?>
            <?php foreach( $featured_posts as $post ):  setup_postdata($post); ?>
                <?php get_template_part('modules/people-card'); ?>
            <?php endforeach; ?>
            <?php  wp_reset_postdata(); ?>
        <?php endif; ?> 
    </div>

    <div class="row m-0">
        <div class="col col-12">
            <br><br>
            <p>Operations</p>
        </div>
    </div>

    <div class="row">
         <?php $featured_posts = get_field('operations'); if( $featured_posts ): ?>
            <?php foreach( $featured_posts as $post ):  setup_postdata($post); ?>
                <?php get_template_part('modules/people-card'); ?>
            <?php endforeach; ?>
            <?php  wp_reset_postdata(); ?>
        <?php endif; ?> 
    </div>

    <div class="row m-0">
        <div class="col col-12">
            <br><br>
            <p>Real Estate</p>
        </div>
    </div>

    <div class="row">
         <?php $featured_posts = get_field('real_estate'); if( $featured_posts ): ?>
            <?php foreach( $featured_posts as $post ):  setup_postdata($post); ?>
                <?php get_template_part('modules/people-card'); ?>
            <?php endforeach; ?>
            <?php  wp_reset_postdata(); ?>
        <?php endif; ?> 
    </div>

    <div class="row m-0">
        <div class="col col-12">
            <br><br>
            <p>Private Equity</p>
        </div>
    </div>

    <div class="row">
         <?php $featured_posts = get_field('private_equity'); if( $featured_posts ): ?>
            <?php foreach( $featured_posts as $post ):  setup_postdata($post); ?>
                <?php get_template_part('modules/people-card'); ?>
            <?php endforeach; ?>
            <?php  wp_reset_postdata(); ?>
        <?php endif; ?> 
    </div>
</section>  

<?php } else if(is_page('275')) { ?> 

    <section class="p-0 ">
        <picture class="cover img-fluid p-absolute z-index-1" id="headerimg">
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/home_page_image_1.webp" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/home_page_image_1.jpg" type="image/jpeg"> 
            <img src="<?php echo get_template_directory_uri(); ?>/images/home_page_image_1.jpg" class="cover fadein">
            </picture>

            <div class="row general-padding z-index-2 white-text page-header">
                <div class="col-12 col align-end">
                    <h1 class="mb-0  tile"><?php the_title(); ?></h1>
                </div>
            </div>
        </section> 

        <section>
            <div class="row">
                <div class=" col col-9">
                    <p class="intro mb-0 mt-0 tile"><?php the_field('intro'); ?></p>
                </div>
            </div>
        </section>    

    <section class="page-header">
        <div class="row">
            <div class=" col col-12">

            <?php $featured_posts = get_field('featured_article'); if( $featured_posts ): ?> <?php foreach( $featured_posts as $post ): ?>
                    <?php get_template_part('modules/story-card'); ?>
                <?php endforeach; wp_reset_postdata(); ?>
            <?php endif; ?>

            </div>
        </div>
    </section> 

    <section>
        <div class="row">     
                <?php $count = 1; $the_query = new WP_Query(array( 'posts_per_page' => 100, 'post_type' => 'post', 'order'=>'ASC' )); while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-12 col">
                        <?php get_template_part('modules/news-card'); ?>
                    </div>
                <?php $count++; endwhile; ?>
                <?php wp_reset_query(); ?>   
        </div>
    </section>  
 <?php } else { ?> 


    
<section class="text-header page-header <?php if(get_field('is_this_a_terms_page') == "Yes") { ?> blue <?php } ?>">
    <div class="row">
        <div class=" col col-8">
            <h1><?php the_title(); ?></h1>
            <p class="intro mb-0 tile"><?php the_field('intro'); ?></p>
        </div>
    </div>
</section>    
    
<?php } ?>




<?php if(is_page(38)) { ?> 




<section>
<?php  if( have_rows('values') ):  while( have_rows('values') ) : the_row(); ?>

<?php // Provides: Hll Wrld f PHP
$value = get_sub_field('title');
$valueid = str_replace(' ', '', $value); ?>

    <div class="row" id="<?php echo $valueid; ?>">
        <div class="col-12">
            <div class="border-top"></div>
        </div>
    </div>

    <div class="row values-row">
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
        <div class="col-6 pr-5">
            <p><?php the_sub_field('main_text'); ?></p><br>
        </div>
    </div>
<?php  endwhile; else : endif; ?>
</section>   
<?php } ?>






<?php if(is_page(10)) { ?> 


 
<?php } ?>




<?php if(is_page(200)) { ?> 
<section>
   
    <div class="row">
        <div class="col-6 col">
			
			 <div class="row">
				<div class="col-12">
					<div class="border-top w-100"></div>
				</div>
			</div>
			
			
            <p>Email<br>info@cardinalcaptialgroup.com</p>
			<br>
			<div class="row">
				<div class="col-12">
					<div class="border-top w-100"></div>
				</div>
			</div>
			 <p>Phone<br>+353 1 218 0800</p>
			
        </div>
        <div class="col-6 col">
           <img src="http://161.35.36.169/wp-content/uploads/2022/10/Cardinal_map.jpg" class="img-fluid object-cover rounded">
        </div>
    </div>
</section>  

 
<?php } ?>



<?php if(is_page(14)) { ?> 

<section>
    <div class="row">
        <div class="col-12 col">
            <div class="border-top w-100"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col">
            <p><?php the_field('title'); ?></p>
        </div>
        <div class="col-6 col">
            <p><?php the_field('main_text'); ?></p>
        </div>
    </div>
</section>  

<section>
    <div class="row">
    <?php $featured_posts = get_field('stories'); if( $featured_posts ): ?>
        <?php foreach( $featured_posts as $post ):  setup_postdata($post); ?>
            <?php get_template_part('modules/story-card'); ?>
        <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>
    </div>
</section>   

<?php } ?>



<?php if(get_field('is_this_a_terms_page') == "Yes") { ?> 

<section>
    <div class="row m-0">
        <div class="col-8 col">
        <?php if( have_rows('page_content') ): while( have_rows('page_content') ) : the_row(); ?>

                <p class="mb-0"><?php the_sub_field('heading'); ?></p>
                <p2><?php the_sub_field('text_block'); ?></p2>

        <?php  endwhile; else : endif; ?> 
        <div>
    <div>
</section>

<?php } ?>




<?php get_template_part('layout'); ?>	


<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'Base'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>