<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header container-fluid d-flex justify-content-between align-items-center py-4 py-xl-5 px-4 px-xl-5">
        <div class="header__logo ms-1 ms-xl-0">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo_white.webp" alt="<?php bloginfo('name'); ?>" width="auto" height="65">
            </a>
        </div>
        <div class="header__menu-wrapper d-flex justify-content-between align-items-center me-1 me-xl-0">
            <nav class="header__menu navbar navbar-expand-lg d-none d-md-block">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                        'walker' => new Bootstrap_NavWalker(),
                    ));
                    ?>
                </div>
            </nav>
            <div id="menu-button">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <nav class="second-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-menu-2',
                        'container' => false,
                        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                        'walker' => new Bootstrap_NavWalker(),
                    ));
                    ?>
            </nav>
        </div>

    </header>
