<?php
/**
 * theme functions.
 * 
 * @package ct_sebastian
 */ 


// enqueing css function 
function ct_sebastian_enqueue_scripts() {

    // register styles
    wp_register_style('style-css', get_stylesheet_uri(), [] , filemtime( get_template_directory() . '/style.css' ), 'all' );

    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [] , false, 'all' );


    // register scripts
    wp_register_script( 'main-js', get_template_directory_uri(  ) . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js' ), true  );

    wp_register_script( 'bootstrap-js', get_template_directory_uri(  ) . '/assets/src/library/css/bootstrap.min.js', [ 'jQuery' ],false ,true  );

    // enqueue styles
    wp_enqueue_style( 'style-css' );

    wp_enqueue_style( 'bootstrap-css' );
    
    //enqueue scripts
    wp_enqueue_script( 'main-js' );

    wp_enqueue_script( 'bootstrap-js' );
    
}

add_action( 'wp_enqueue_scripts', 'ct_sebastian_enqueue_scripts' );

?>