<?php
/**
 * theme functions.
 * 
 * @package ct_sebastian
 */ 


// enqueing css function 
function ct_sebastian_enqueue_scripts() {

    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [] , filemtime( get_template_directory() . '/style.css' ), 'all' );
}

add_action( 'wp_enqueue_scripts', 'ct_sebastian_enqueue_scripts' );

?>