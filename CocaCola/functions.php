<?php
function CocaCola_theme_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // Register navigation menu
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'CocaCola'),
    ));

    register_nav_menus(array(
        'main-menu-2' => __('Right Menu', 'CocaCola'),
    ));
}
add_action('after_setup_theme', 'CocaCola_theme_setup');

// Enqueue styles and scripts
function my_custom_theme_scripts() {
    // Подключение основного CSS файла
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/dist/css/CocaCola.css', array(), '1.0.0', 'all');

    // Theme CSS
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // jQuery
    wp_enqueue_script('jquery');

    // Добавляем основной скрипт main.bundle.js, который включает Popper.js и Bootstrap
    wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/js/main.bundle.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

// Include the Bootstrap NavWalker class
require get_template_directory() . '/inc/class-bootstrap-navwalker.php';

//remove tags from contacts
add_filter('wpcf7_autop_or_not', '__return_false');
?>
