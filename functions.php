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





//Ta bort kommentarer från wp-admin
add_action('admin_menu', 'remove_menus');

function remove_menus(){
    remove_menu_page('edit-comments.php');
}



//Lägg till adress till användare
add_action( 'show_user_profile', 'custom_user_profile_fields' );
add_action( 'edit_user_profile', 'custom_user_profile_fields' );

function custom_user_profile_fields( $user ) {
    ?>
    <h3>Egna fält</h3>
    <p>Administratörens adress visas i footern.</p>
        <table class="form-table">
            <tr>
                <th>
                    <label for="adress">Adressrad 1</label>
                </th>
                <td>
                    
                    <input type="text" name="adress1" id="adress1" value="<?php echo esc_attr( get_the_author_meta( 'adress1', $user->ID ) ); ?>" class="regular-text" />
                    
                    <br><span class="description">Gatunamn och nummer.</span>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="adress">Adressrad 2</label>
                </th>
                <td>
                    
                    <input type="text" name="adress2" id="adress2" value="<?php echo esc_attr( get_the_author_meta( 'adress2', $user->ID ) ); ?>" class="regular-text" />
                    
                    <br><span class="description">Postnummer och postort</span>
                </td>
            </tr>
        </table>
    <?php
    }

add_action('personal_options_update', 'save_extra_profile_fields');
add_action('edit_user_profile_update', 'save_extra_profile_fields');

function save_extra_profile_fields($user){
    if(!current_user_can('edit_user', $user))
        return false;
        update_usermeta($user, 'adress1', $_POST['adress1']);
        update_usermeta($user, 'adress2', $_POST['adress2']);

}


