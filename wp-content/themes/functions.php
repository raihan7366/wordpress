<?php
    add_theme_support( 'menus' );

    function theme_register_menus() {
        register_nav_menus( array(
            'primary-menu' => __( 'Primary Menu'),
            'footer_menu1'=>"Footer Section 1",
            'footer_menu2'=>"Footer Section 2",
            'footer_menu3'=>"Footer Section 3",
        ) );
    }
    add_action( 'after_setup_theme', 'theme_register_menus' );
    function my_custom_logo_setup(){
        $arg=array(
            'height'        => 100,
            'width'         => 400,
            'flex-height'   => true,
            'flex-width'    => true,
            'header-text' => array('site-title','site-description')
        );
        add_theme_support('custom-logo',$arg);
    }
    add_action('after_setup_theme','my_custom_logo_setup');



// The custom function to register a custom post type for "banner"
function my_theme_banner() {
    // Set the labels. This variable is used in the $args array
    $labels = array(
        'name'               => __( 'Banners' ),
        'singular_name'      => __( 'Banner' ),
        'add_new'            => __( 'Add New Banner' ),
        'add_new_item'       => __( 'Add New Banner' ),
        'edit_item'          => __( 'Edit Banner' ),
        'new_item'           => __( 'New Banner' ),
        'all_items'          => __( 'All Banners' ),
        'view_item'          => __( 'View Banner' ),
        'search_items'       => __( 'Search Banners' ),
        'featured_image'     => 'Banner Image',
        'set_featured_image' => 'Add Banner Image'
    );

    // The arguments for our post type, to be entered as parameter 2 of register_post_type()
    $args = array(
        'labels'            => $labels,
        'description'       => 'Banner image and details add',
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'has_archive'       => false,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'query_var'         => true,
    );

    // Call the actual WordPress function
    // Parameter 1 is a name for the post type
    // Parameter 2 is the $args array
    register_post_type('banner', $args);
}

// Hook into the 'init' action to register the custom post type on WordPress initialization
add_action( 'init', 'my_theme_banner' );

add_theme_support('post-thumbnails');
add_image_size('full', 9999, 9999, false);

