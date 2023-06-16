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

    <?php wp_body_open(); ?>

    <header>header</header>