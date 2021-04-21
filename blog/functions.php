<?php
function blog_theme_support(){
add_theme_support('title-tag') ;
}

function mdbtheme_setup() {
     // Add featured image support
     add_theme_support('post-thumbnails');
 }
 add_action('after_setup_theme', 'mdbtheme_setup');
 
add_action('after_setup_theme' , 'blog_theme_support') ;

function blog_menu()
{
     $location = array(
          'primary' => "Desktop primary navbar" ,
          'footer' => "Footer menu items"
     ) ;
     register_nav_menus($location) ;
}

add_action('init' , 'blog_menu') ;

     function blog_register_styles(){
     $version = wp_get_theme()->get('Version') ;
     wp_enqueue_style('blog_style', get_template_directory_uri(). '/style.css', array('blog_bootstrap'), $version, 'all') ;
     wp_enqueue_style('blog_bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css", array(), '1.0', 'all') ;
     wp_enqueue_style('blog_style', get_template_directory_uri(). '/style.css', array(), '1.0', 'all') ;

} 

add_action( 'wp_enqueue_scripts', 'blog_register_styles') ;



function blog_register_scripts(){

     wp_enqueue_script('blog_bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js", array(), '1.0', 'all') ;
     wp_enqueue_script('blog_popprt', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js", array(), '1.0', 'all') ;
     wp_enqueue_script('blog_bootstrap_min_js', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js", array(), '1.0', 'all') ;

} 

add_action( 'wp_enqueue_scripts', 'blog_register_scripts') ;
