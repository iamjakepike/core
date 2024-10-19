<?php

// Add support for post thumbnails
add_theme_support( 'post-thumbnails' );

// Remove block library styles
function remove_wp_block_library_css() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'classic-theme-styles' );
    wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css', 100 );

// Remove emoji styles
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// Disable the emoji script
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_resource_hints', 2 ); // Optional: Remove emoji DNS prefetch


/**
 * Register WordPress Menus
 */
function register_menus() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_menus' );

/**
 * Display the post excerpt with a character limit.
 */
function core_custom_excerpt( $char_count ) {
    $excerpt = get_the_excerpt();
 
    if ( strlen( $excerpt ) > $char_count ) {
        $excerpt = substr( $excerpt, 0, $char_count );
        $excerpt .= '...';
    }

    echo $excerpt;
}