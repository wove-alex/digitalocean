<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php bloginfo('name'); ?> <?php wp_title( '—' ); ?></title>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
    

<?php wp_head(); ?>
</head>
    

<nav id="navbar" class="<?php if(is_single() == true){ ?> green <?php } ?> <?php if(get_field('is_this_a_terms_page') == "Yes") { ?> blue <?php } ?>" >
    <span>
        <a href="<?php echo home_url(); ?>">
            <?php get_template_part('inc-blocks/home-logo'); ?>
        </a>
    </span>
        <span class="hide-when-small">
			<?php $args = array( 'theme_location' => 'primary' ); ?>
			<?php wp_nav_menu(  $args ); ?>		
		</span>
	
	
	<div class="master-container show-when-small">
	   <div class="burger-menu">
		  <div class="bar" onclick="myFunc()">
			  <span class="bar-1"> </span>
			  <span class="bar-2"> </span>
			  <span class="bar-3"> </span>
		   </div>
		</div>
	</div>
	
</nav>
    
  
<body <?php body_class(); ?> id="Body">
        


    
        
<div class="burger-menu-outer">
    <?php $args = array( 'theme_location' => 'primary' ); ?>
			<?php wp_nav_menu(  $args ); ?>	
</div>