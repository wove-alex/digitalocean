<?php  get_header(); ?>


<section class="page-header">
    <div class="row">
        <div class="col-8">
            <h1><?php the_title(); ?></h1>
            <p class="intro"><?php the_field('intro'); ?></p>
        </div>
    </div>
</section>   



<section>
		
	<?php if( is_post_type_archive('people') ) { ?> 

        <div class="row m-0">
                <div class="col col-12">
                    <p>Operations</p>
                </div>
            </div>
            <div class="row m-0">
                <?php  $count = 1; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if(get_field('sector') == "Operations") { ?> 
                    <?php get_template_part('modules/people-card'); ?>
                <?php } ?>
                <?php $count++; endwhile; else: ?><p>No Posts :(</p><?php endif; ?>
            </div>

            <div class="row m-0">
                <div class="col col-12">
                    <p>Real Estate</p>
                </div>
            </div>
            <div class="row m-0">
                <?php  $count = 1; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if(get_field('sector') == "Real Estate") { ?> 
                    <?php get_template_part('modules/people-card'); ?>
                <?php } ?>
                <?php $count++; endwhile; else: ?><p>No Posts :(</p><?php endif; ?>
            </div>
        
            <div class="row m-0">
                <div class="col col-12">
                    <p>Private Equity</p>
                </div>
            </div>
            <div class="row m-0">
                <?php  $count = 1; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if(get_field('sector') == "Private Equity") { ?> 
                    <?php get_template_part('modules/people-card'); ?>
                <?php } ?>
                <?php $count++; endwhile; else: ?><p>No Posts :(</p><?php endif; ?>
            </div>

        
	<?php }  else { ?> 

        <?php  $count = 1; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_title(); ?>
        <?php $count++; endwhile; else: ?>
            <p>No Posts :(</p>
        <?php endif; ?>

   <?php } ?> 

	
	</section>

<?php get_footer(); ?>