<?php

//registrera menyer
add_action('init', 'register_menus');

function register_menus(){
    register_nav_menus(array(
        'main-nav' => __('Huvudmeny'),
        'footer-links' => __('Länkar i footer')
    ));
}