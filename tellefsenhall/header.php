<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title><?php page_title(); ?></title>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="container">
            <header>
                <h1><a href="<?php bloginfo('url'); ?>">Dr. Sungae Lee</a></h1>
                <?php
                    wp_nav_menu(array(
                        'container' => false,
                        'theme_location' => 'primary'
                    ));
                ?>
                <div class="login-link">
                    <?php
                        global $wp;
                        $current_url = home_url(add_query_arg(array(),$wp->request));
                        if (is_user_logged_in()) {
                            echo '<a href="'. admin_url() . '">Admin Site</a>';
                            echo '<a href="'. wp_logout_url( $current_url ) . '">Logout</a>';
                        } else {
                            echo '<a href="'. wp_login_url( $current_url ) . '">Login</a>';
                        }
                    ?>
                </div>
            </header>
            <div class="content">