<?php if( get_field('type_of_news_post') == 'External Article' ) { ?> 

    <?php
$color = get_field('third_party_site');
?>

<a class="row story-card" href="<?php the_field('third_party_link'); ?>" target="_blank" rel="no-opener">
    <div class="col-12 border-top">

    </div>
    <div class="col-1 d-flex">
        <img class="favicon m-auto ml-0" src="<?php echo get_template_directory_uri(); ?>/images/favicons/<?php echo esc_attr($color['value']); ?>.png">
     </div>
    <div class="col-7 d-flex">
        <p class="m-auto ml-0"><?php the_title(); ?></p>
        <p2 class="show-when-small  date"><?php $post_date = get_the_date( 'm.j.Y' ); echo $post_date; ?></p2>
    </div>
    <div class="col-2 d-flex">
        <p2 class="hide-when-small m-auto ml-0"><?php $post_date = get_the_date( 'm.j.Y' ); echo $post_date; ?></p2>
    </div>
    <div class="col-2 text-right d-flex">
        <p2 class="m-auto mr-0"><?php echo esc_html($color['label']); ?>
            <svg width="12" height="15" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.385 5.19083C11.5302 4.04562 12.6408 3.00897 13.5916 2.20615C10.6376 2.86679 6.56096 2.72678 1.98073 1.83271L2.11776 0.216133C7.35718 1.37573 11.1779 1.43876 15.7872 0.787237L15.8797 0.879709C15.2097 5.47051 15.2554 9.34556 16.4329 14.5671L14.8163 14.7041C13.9408 10.1424 13.8014 6.10209 14.4435 3.12966C13.6407 4.08044 12.604 5.19107 11.4767 6.31838L2.06449 15.7306L0.954838 14.6209L10.385 5.19083Z" fill="black"/>
            </svg>
        </p2>
    </div>
</a>





<?php } ?>



<?php if( get_field('type_of_news_post') == 'Internal Article' ) { ?> 
    
<a class="row story-card" href="<?php the_permalink(); ?>" >
    <div class="col-12 border-top">

    </div>
    <div class="col-1  d-flex">
        Icon
     </div>
    <div class="col-7 d-flex">
        <p class="m-auto ml-0"><?php the_title(); ?></p>
        <p2 class="show-when-small date"><?php $post_date = get_the_date( 'm.j.Y' ); echo $post_date; ?></p2>
    </div>
    <div class="col-2 d-flex">
        <p2 class="hide-when-small m-auto ml-0"><?php $post_date = get_the_date( 'm.j.Y' ); echo $post_date; ?></p2>
    </div>
    <div class="col-2 text-right d-flex">
        <p2 class="m-auto mr-0">
            Read more
            <svg width="15" height="15" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.0662 10.0934C15.6858 10.0934 17.2041 10.1457 18.4441 10.2504C15.8882 8.62876 13.1046 5.64711 10.4981 1.77619L11.7381 0.730001C14.6229 5.25479 17.28 8.00104 21 10.7996L21 10.9304C17.28 13.7028 14.5723 16.4752 11.7127 21L10.4728 19.9538C13.0793 16.109 15.8376 13.1535 18.3935 11.5058C17.1535 11.6104 15.6352 11.6627 14.0409 11.6627L0.73 11.6627L0.730001 10.0934L14.0662 10.0934Z" fill="black"/>
            </svg>

        </p2>
    </div>
</a>

    
<?php } ?>


<?php if( get_field('type_of_news_post') == 'Alert' ) { }?>

