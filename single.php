<?php 
get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if(is_singular('people')){ ?> 

<section class="p-0">
    <div class="row general-padding z-index-2 page-header">
        <div class="col-12 col align-end">
            <div>
				<h1 class="mb-0  tile"><?php the_title(); ?></h1>
					<?php if(is_single(array('News')) == true){ ?><p>Author, <?php $post_date = get_the_date( 'm.j.Y' ); echo $post_date; ?></p><?php }?>

                <?php the_content(); ?>
				
				
				
				
	
				
				<?php  $link = get_field('linkedin'); if( $link ):  $link_url = $link['url']; $link_title = $link['title']; $link_target = $link['target'] ? $link['target'] : '_self'; ?><br><br>
    <p2 class="linkedin-link"><a class="ext-arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
    
    <?php if($link_title == true) { ?> 
    <?php echo esc_html( $link_title ); ?>
    <?php } else { ?> 
        LinkedIn
        <?php } ?>

        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.63648 4.73423C9.60944 3.76128 10.553 2.88056 11.3608 2.1985C8.85116 2.75977 5.38769 2.64082 1.49641 1.88123L1.61283 0.507816C6.06414 1.49299 9.31019 1.54654 13.2262 0.993016L13.3047 1.07158C12.7355 4.97184 12.7744 8.26401 13.7747 12.7001L12.4013 12.8165C11.6574 8.94098 11.539 5.50842 12.0846 2.9831C11.4025 3.79086 10.5218 4.73443 9.56403 5.69218L1.56757 13.6886L0.62483 12.7459L8.63648 4.73423Z" fill="#FF661D"/>
        </svg>


</a></p2>
<?php endif; ?>
				
	
			</div>
        </div>
    </div>
</section> 

<section class="">
    <div class="row ">
    <?php $count = 0; $the_query = new WP_Query(array( 'posts_per_page' => 3, 'post__not_in'  => array(get_the_ID()), 'post_type' => 'people', 'order'=>'rand', )); while ($the_query->have_posts()) : $the_query->the_post(); ?>
												
									<div class="col col-3 col-md-6">
                                                <?php get_template_part('modules/small-people-card') ;?>    
                                            
                                                </div>                
                                    <?php $count++; endwhile; ?>
                                    <?php wp_reset_query(); ?>   
                                   
    </div>
</section> 




<?php } else { ?> 
    
    <section class="p-0 green">
    <div class="row general-padding z-index-2 page-header">
        <div class="col-12 col align-end">
            <div>
				<h1 class="mb-0  tile"><?php the_title(); ?></h1>
				<p class="mb-0">Author, <?php $post_date = get_the_date( 'm.j.Y' ); echo $post_date; ?></p>
			</div>
        </div>
    </div>
</section> 

<section >
    <div class="row">
        <div class=" col col-8">
            <?php the_content(); ?>
        </div>
    </div>
</section>     
    
<?php } ?>


<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.', 'hopyard'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>