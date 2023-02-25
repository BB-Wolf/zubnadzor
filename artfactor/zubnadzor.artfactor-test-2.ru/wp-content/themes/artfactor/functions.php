<?php
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
}

register_nav_menus(array(
    'top'    => 'Главное меню',
    'bottom'    => 'Нижнее меню',
    'service'    => 'Меню услуг',
));


add_action('wp_enqueue_scripts', 'add_styles');
function add_styles()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css');
}


add_action('wp_enqueue_scripts', 'addJs');
function addJs()
{
    wp_enqueue_script('aos.js', get_template_directory_uri() . '/js/aos.js');
}
