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


//aktivera featured image
add_theme_support('post-thumbnails');
//egna storlekar
add_image_size('preview', 600, 300, array('center'));
add_image_size('post-size', 900, 600, true);


//aktivera widget area
add_action('widgets_init', 'activate_widgets');

function activate_widgets(){

    //för startsidan
    register_sidebar(array(
        'name'           => 'start1',
		'id'             => "start1",
		'description'    => 'Widget på startsidan',
		'class'          => 'widget',
        'before_widget'  => '<div class="widget-container"><div class="widget">',
        'after_widget'   => '</div></div>'
    ));
    register_sidebar(array(
        'name'           => 'start2',
		'id'             => "start2",
		'description'    => 'Widget på startsidan',
		'class'          => 'widget',
        'before_widget'  => '<div class="widget-container"><div class="widget">',
        'after_widget'   => '</div></div>'
    ));
    register_sidebar(array(
        'name'           => 'start3',
		'id'             => "start3",
		'description'    => 'Widget på startsidan',
		'class'          => 'widget',
        'before_widget'  => '<div class="widget-container"><div class="widget">',
        'after_widget'   => '</div></div>'
    ));


    //för bilder på Om Oss-sidan
    register_sidebar(array(
        'name'           => 'about1',
		'id'             => "about1",
		'description'    => 'Widget på Om Oss',
        'before_widget'  => '<div class="widget-container"><div class="photo">',
        'after_widget'   => '</div></div>'
    ));
    register_sidebar(array(
        'name'           => 'about2',
		'id'             => "about2",
		'description'    => 'Widget på Om Oss',
		'class'          => 'widget',
        'before_widget'  => '<div class="widget-container"><div class="photo">',
        'after_widget'   => '</div></div>'
    ));
    register_sidebar(array(
        'name'           => 'about3',
		'id'             => "about3",
		'description'    => 'Widget på Om Oss',
		'class'          => 'widget',
        'before_widget'  => '<div class="widget-container"><div class="photo">',
        'after_widget'   => '</div></div>'
    ));

}