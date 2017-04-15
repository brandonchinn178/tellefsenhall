<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title><?php page_title(); ?></title>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
        <?php wp_head(); ?>
    </head>
    <body>
        <?php
            wp_nav_menu(array(
                'container' => 'nav',
                'theme_location' => 'primary',
            ));
        ?>
        <header>
            <a href="/" class="banner">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
                <div class="titles">
                    <h1>Tellefsen Hall</h1>
                    <p class="subtitle">Home of the California Marching Band</p>
                </div>
            </a>
        </header>
        <!-- replace photo -->
        <div class="banner-photo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/test.jpg">
        </div>
        <div class="content">
