<?php

//registrera menyer
add_action('init', 'register_menus');

function register_menus(){
    register_nav_menus(array(
        'main-nav' => __('Huvudmeny'),
        'footer-links' => __('Länkar i footer')
    ));
}


//aktivera custom herobild
$args = array(
    'default-image' => get_template_directory_uri() . '/images/hero.jpg',
    'width' => 1440,
    'height' => 555,
    'uploads' => true
);
add_theme_support('custom-header', $args);