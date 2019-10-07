<?php

/* Google Analytics
add_action('wp_head', 'cz_add_googleanalytics');
function cz_add_googleanalytics() { ?>
 
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126969627-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-126969627-1');
  </script>
  <?php 
}*/



//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

//allow Featured Images in Posts/Pages
add_theme_support( 'post-thumbnails' );

//Disable Emoji from WP Core
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );




// default Media Dei scripts
function scripts_styles() {

    //Register Scripts/Styles
    wp_register_style( 'global-style', get_template_directory_uri() . '/css/global.css');
    wp_enqueue_style('global-style');
    
    //wp_register_style('font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css');
    //wp_enqueue_style('font-awesome-style');

    //Enqueue Scripts/Styles
    wp_enqueue_script('jquery'); // default jQuery

}
add_action( 'wp_enqueue_scripts', 'scripts_styles');


//shortcodes
// define the path   
$shortcodes_path = get_template_directory() . '/shortcodes';

// ** Get the shortcodes.php **
require_once $shortcodes_path . '/shortcodes.php';



add_action('init', 'cz_register_post_type');

function cz_register_post_type() {
    register_post_type('projects', array(
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new' => 'Add new project',
            'edit_item' => 'Edit project',
            'new_item' => 'New project',
            'view_item' => 'View project',
            'search_items' => 'Search projects',
            'not_found' => 'No projects found',
            'not_found_in_trash' => 'No projects found in Trash'
        ),
        'public' => true,
        'supports' => array(
            'title',
            'excerpt',
            'thumbnail'
        ),
        'taxonomies' => array('category', 'post_tag')
    ));
}
?>
