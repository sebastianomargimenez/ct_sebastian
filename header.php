<?php
/**
 * header template
 * 
 * @package ct_sebastian
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<!-- body_class is used to add classes to the pages (you can pass your own class using [body_class('sample-class')] )   -->

<body <?php body_class();?>>

<!-- use wp_body_open to add script in the start of body  -->

    <?php

    if(function_exists( 'wp_body_open()' ) ){
        wp_body_open();
    };

    ?>

    <div class="page" class="site">
        
        <header id="musthead" class="site-header" role="banner">
            <?php get_template_part( 'template-parts/header/nav' ); ?>
        </header>

        <div class="content" class="site-content">
