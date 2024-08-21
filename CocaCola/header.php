<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header container-fluid d-flex justify-content-between align-items-center py-4 py-xl-5 px-xl-5">
        <div class="header__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo_white.webp"
                <?php bloginfo('name'); ?>
            </a>
        </div>
        <nav class="header__menu navbar navbar-expand-lg">
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
    </header>
