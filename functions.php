<?php

if(! function_exists('projectandcontentexperts_theme_setup')):
    function projectandcontentexperts_theme_setup(){
        add_theme_support( 'custom-logo' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'wp-block-styles');
        add_theme_support( 'post-formats' );
        
        register_nav_menus( array(
            'primary' => __('Primary Menu', 'projectandcontentexperts')
        ) );
    }
endif;
add_action('after_setup_theme','projectandcontentexperts_theme_setup');

function projectandcontentexperts_scripts(){
    wp_enqueue_style( 'style',get_stylesheet_uri(  ));
}
add_action('wp_enqueue_scripts','projectandcontentexperts_scripts');

require get_template_directory().'/inc/service.php';

?>