<?php
/**
 * Enqueue theme stylesheets and JavaScript files.
 */
function core_enqueue_assets() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'core-style', get_template_directory_uri() . '/dist/style.css', array(), '1.0.0' );

    // Enqueue main JavaScript file
    wp_enqueue_script( 'core-scripts', get_template_directory_uri() . '/dist/app.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'core_enqueue_assets' );