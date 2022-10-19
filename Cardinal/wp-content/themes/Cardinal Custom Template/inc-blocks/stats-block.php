<section class="container">
    <div class="row">

    <?php $count = count(get_sub_field('stats')); ?>

    <?php if(get_sub_field('title_postion') == "Left") { ?> 
        <div class="col <?php if($count == 4) { echo "col-12"; } else if($count == 3){ echo "col-3"; } else if($count == 2){ echo "col-6"; }  else if($count == 3){ echo "col-6"; } ?>">
            <div class="border-top">
                <p><?php the_sub_field('title'); ?></p>
            </div>
    </div>
        
        <?php } ?>

            <div class="col <?php if($count == 4) { echo "col-12"; } else if($count == 3){ echo "col-9"; } else if($count == 2){ echo "col-6"; }  else if($count == 3){ echo "col-3"; } ?>">

            <div class="rounded <?php the_sub_field('block_colour'); ?> stat row tile">
                <?php if(get_sub_field('title_postion') == "Inside Block") { ?> 
                    <div  class="col-12">
                        <?php the_sub_field('title'); ?>
                    </div>             
                    <?php } ?>


                    <?php if( have_rows('stats') ):
                        while( have_rows('stats') ) : the_row();?> 
                             <div class="col <?php if($count == 4) { echo "col-3 col-sm-6"; } ?><?php if($count == 3) { echo "col-4"; } ?> <?php if($count == 2) { echo "col-6"; } ?><?php if($count == 1) { echo "col-12"; } ?>">
                                
                             <?php $string =  get_sub_field('stat_number'); 
                             

                    if (str_contains($string, 'sq. ft.')) {
                        $nosqm = str_replace("sq. ft.", "", $string);
                        echo "<h2 class='mb-0'>".$nosqm."<span>sq. ft.</span></h2>";
                    } else { ?> 
                    <h2 class="mb-0"><?php the_sub_field('stat_number'); ?></h2>
                    <?php } ?>
                             
                             
                                <p2><?php the_sub_field('subtext'); ?></p2>
                                </div>
                        <?php endwhile; else : endif;?>
                
  
            </div>

            </div>  
            
            

            <?php if(get_sub_field('title_postion') == "Right") { ?> 
        <div class="col <?php if($count == 4) { echo "col-12"; } else if($count == 3){ echo "col-3"; } else if($count == 2){ echo "col-6"; }  else if($count == 3){ echo "col-6"; } ?>">
            <div class="border-top">
            <?php the_sub_field('title'); ?>
            </div>
    </div>
        
        <?php } ?>

    </div>
</section> 


