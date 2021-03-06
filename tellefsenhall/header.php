<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title><?php page_title(); ?></title>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" />
        <link href="https://fonts.googleapis.com/css?family=Oswald|PT+Serif:400,400i,400b,400bi" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
        <?php wp_head(); ?>
    </head>
    <body>
        <nav>
            <?php
                wp_nav_menu(array(
                    'container' => false,
                    'theme_location' => 'primary',
                ));
            ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/highstepper.png">
        </nav>
        <header>
            <a href="/" class="banner">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
                <div class="titles">
                    <h1>Tellefsen Hall</h1>
                    <p class="subtitle">Home of the California Marching Band</p>
                </div>
            </a>
        </header>

        <?php
            $image = get_field('image');
            if ($image):
        ?>
            <div class="banner-photo">
                <img src="<?php echo $image; ?>">
            </div>
        <?php endif; ?>

        <div class="content">
