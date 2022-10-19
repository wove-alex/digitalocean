<?php

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
global $wp_meta_boxes;

    wp_add_dashboard_widget('custom_help_widget', 'Support', 'custom_dashboard_help');
}

function custom_dashboard_help() {
echo '<p></p>';
}

// UNCOMMENT TO REMOVE DEFAULT POST TYPE
// add_action( 'admin_menu', 'remove_default_post_type' );
// 
// function remove_default_post_type() {
//     remove_menu_page( 'edit.php' );
// }

function remove_dashboard_widgets() {
    global $wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
 
}
 
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );



function base_head() { // Our own unique function called james_adds_to_the_head




    wp_enqueue_script('jquery');  // Enqueue jQuery that's already built into WordPress

    //wp_register_script( 'add-bootjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js', array('jquery'),null);
    
    // wp_register_script( 'add-rellax', 'https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js', array('jquery'),null);
    wp_register_script( 'add-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'),null);

    // wp_register_style( 'add-boot', 'https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css',array(), NULL);
    wp_register_style( 'add-base', get_template_directory_uri() . '/css/base.css',array(), NULL);
    wp_register_style( 'add-css', get_template_directory_uri() . '/css/master-style.css',array(), NULL);

   //wp_enqueue_script( 'add-bootjs' );
    wp_enqueue_script( 'add-scripts' );

    // wp_enqueue_style( 'add-boot' );
    wp_enqueue_style( 'add-base' );
    wp_enqueue_style( 'add-css' );

}

add_action( 'wp_enqueue_scripts', 'base_head' ); //Hooks our custom function into WP's wp_enqueue_scripts function
add_action( 'after_setup_theme', 'base_setup' );

if ( ! function_exists( 'base_setup' ) ):



function base_setup() {
add_editor_style();
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
register_nav_menus( array(
'primary' => __( 'Primary Navigation', 'base' ),
'footer' => __( 'Footer index', 'base' ),
) );

}
endif;



add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>

  </style>';
}



function remove_comments(){
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'remove_comments' );

// Disable support for comments and trackbacks in post types
function df_disable_comments_post_types_support() {
$post_types = get_post_types();
foreach ($post_types as $post_type) {
    if(post_type_supports($post_type, 'comments')) {
        remove_post_type_support($post_type, 'comments');
        remove_post_type_support($post_type, 'trackbacks');
    }
}
}
add_action('admin_init', 'df_disable_comments_post_types_support');

// Close comments on the front-end
function df_disable_comments_status() {
return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);

// Hide existing comments
function df_disable_comments_hide_existing_comments($comments) {
$comments = array();
return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

// Remove comments page in menu
function df_disable_comments_admin_menu() {
remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'df_disable_comments_admin_menu');

// Redirect any user trying to access comments page
function df_disable_comments_admin_menu_redirect() {
global $pagenow;
if ($pagenow === 'edit-comments.php') {
    wp_redirect(admin_url()); exit;
}
}
add_action('admin_init', 'df_disable_comments_admin_menu_redirect');

// Remove comments metabox from dashboard
function df_disable_comments_dashboard() {
remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'df_disable_comments_dashboard');

// Remove comments links from admin bar
function df_disable_comments_admin_bar() {
if (is_admin_bar_showing()) {
    remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
}
}
add_action('init', 'df_disable_comments_admin_bar');



add_filter('style_loader_tag', 'codeless_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'codeless_remove_type_attr', 10, 2);
function codeless_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}

/*** Remove Query String from Static Resources ***/
function remove_cssjs_ver( $src ) {
 if( strpos( $src, '?ver=' ) )
 $src = remove_query_arg( 'ver', $src );
 return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

/*** Remove Emoji ***/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );



// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);



add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );
function my_toolbars( $toolbars )
{
	// Uncomment to view format of $toolbars
	/*
	echo '< pre >';
		print_r($toolbars);
	echo '< /pre >';
	die;
	*/

	// Add a new toolbar called "Very Simple"
	// - this toolbar has only 1 row of buttons
	$toolbars['Very Simple' ] = array();
	$toolbars['Very Simple' ][1] = array('link' );

	// Edit the "Full" toolbar and remove 'code'
	// - delet from array code from http://stackoverflow.com/questions/7225070/php-array-delete-by-value-not-key
	if( ($key = array_search('code' , $toolbars['Full' ][2])) !== false )
	{
	    unset( $toolbars['Full' ][2][$key] );
	}

	// remove the 'Basic' toolbar completely
	unset( $toolbars['Basic' ] );

	// return $toolbars - IMPORTANT!
	return $toolbars;
}




function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
   } 
   add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
   




/* function to add classes to active menu entries */
function add_active_class_to_custom_posts($classes = array(), $menu_item = false){
    global $wp_query;
    $post_name = $menu_item->post_name;
    $post_type = get_post_type();

    /* Highlight the current menu item if the category-parent of the current posts' category equals to the menu name.
     * This is usually the case when you set a category as custom menu item and use wp_nav_menu() to display that */
    $query_var = get_query_var('cat');
    if ($query_var) {
        $current_category = get_category($query_var);
        $root_categoryObj = get_category($current_category->parent, false);
        $root_categoryName = strtolower(($root_categoryObj->name));
        if (strcasecmp($post_name, $root_categoryName) == 0) $classes[] = 'current-menu-item';    
    }
    
    /* assign 'current-menu-item' to regular posts; that's the default behaviour we just copy here */
    if(in_array('current-menu-item', $menu_item->classes)){
        $classes[] = 'current-menu-item';
    }
    else {
        /* assign the 'current-menu-item' class to all custom posts */
        if ($post_name == $post_type) {
            $classes[] = 'current-menu-item';
        }
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'add_active_class_to_custom_posts', 10, 2 );


function add_acf_body_class($class) {
    $value = get_field('genre');
    $class[] = $value;
    return $class;
}
add_filter('body_class', 'add_acf_body_class');



     
// Customise wordpress login screen
function custom_loginlogo() {
echo '<style type="text/css">
</style>';
}
add_action('login_head', 'custom_loginlogo');

//Change name of standard post type
add_action( 'init', 'cp_change_post_object' );
// Change dashboard Posts to News
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'News';
        $labels->singular_name = 'News';
        $labels->add_new = 'Add News';
        $labels->add_new_item = 'Add News';
        $labels->edit_item = 'Edit News';
        $labels->new_item = 'News';
        $labels->view_item = 'View News';
        $labels->search_items = 'Search News';
        $labels->not_found = 'No News found';
        $labels->not_found_in_trash = 'No News found in Trash';
        $labels->all_items = 'All News';
        $labels->menu_name = 'News';
        $labels->name_admin_bar = 'News';
}



// UNCOMMENT TO ADD CUSTOM POST TYPE
function custom_post_type() {
	register_post_type( 'Stories', array(
		'label'                 => __( 'Stories', 'text_domain' ),
		'supports'              => array( 'title', 'editor', 'thumbnail'  ),
		'taxonomies'            => array( 'production-category'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
    ));
    register_post_type( 'People', array(
		'label'                 => __( 'People', 'text_domain' ),
		'supports'              => array( 'title', 'editor', 'thumbnail'  ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
    ));

}

add_action( 'init', 'custom_post_type', 0 );




function tr_create_my_taxonomy() {

	
    register_taxonomy(
        'production-category',
       array( 'productions'),
        array(
            'label' => __( 'Production Categories' ),
            'rewrite' => array( 'slug' => 'production-category' ),
            'hierarchical' => true,
        )
    );



}
add_action( 'init', 'tr_create_my_taxonomy' );




function remove_footer_admin () 
{ echo '<span id="footer-thankyou">Site by <a href="http://www.wove.co" target="_blank">wove</a></span>'; }
add_filter('admin_footer_text', 'remove_footer_admin');



//remove wysiwyg extra buttons
/**
 * Removes buttons from the first row of the tiny mce editor
 *
 * @link     http://thestizmedia.com/remove-buttons-items-wordpress-tinymce-editor/
 *
 * @param    array    $buttons    The default array of buttons
 * @return   array                The updated array of buttons that exludes some items
 */
add_filter( 'mce_buttons', 'jivedig_remove_tiny_mce_buttons_from_editor');
function jivedig_remove_tiny_mce_buttons_from_editor( $buttons ) {

    $remove_buttons = array(
        'bold',
        'italic',
        'strikethrough',
        // 'bullist',
        'numlist',
        'blockquote',
        'hr', // horizontal line
        'alignleft',
        'aligncenter',
        'alignright',
        'unlink',
        'wp_more', // read more link
        'spellchecker',
        'dfw', // distraction free writing mode
        'wp_adv', // kitchen sink toggle (if removed, kitchen sink will always display)
    );
    foreach ( $buttons as $button_key => $button_value ) {
        if ( in_array( $button_value, $remove_buttons ) ) {
            unset( $buttons[ $button_key ] );
        }
    }
    return $buttons;
}

/**
 * Removes buttons from the second row (kitchen sink) of the tiny mce editor
 *
 * @link     http://thestizmedia.com/remove-buttons-items-wordpress-tinymce-editor/
 *
 * @param    array    $buttons    The default array of buttons in the kitchen sink
 * @return   array                The updated array of buttons that exludes some items
 */
add_filter( 'mce_buttons_2', 'jivedig_remove_tiny_mce_buttons_from_kitchen_sink');
function jivedig_remove_tiny_mce_buttons_from_kitchen_sink( $buttons ) {

    $remove_buttons = array(
        'formatselect', // format dropdown menu for <p>, headings, etc
        'underline',
        'alignjustify',
        'forecolor', // text color
        'pastetext', // paste as text
        //'removeformat', // clear formatting
        'charmap', // special characters
        'outdent',
        'indent',
        'undo',
        'redo',
        'wp_help', // keyboard shortcuts
    );
    foreach ( $buttons as $button_key => $button_value ) {
        if ( in_array( $button_value, $remove_buttons ) ) {
            unset( $buttons[ $button_key ] );
        }
    }
    return $buttons;
}