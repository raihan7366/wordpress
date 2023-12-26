<?php
function my_menu(){
    register_nav_menus(array(
        'main_menu'=>"Main Menu",
        'footer_menu1'=>"Footer Section 1",
        'footer_menu2'=>"Footer Section 2",
    ));
}
add_action('init','my_menu');

// custome logo
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


// slider post type
add_action( 'init', 'my_theme_slider' );
// The custom function to register a custom article post type
function my_theme_slider() {
    // Set the labels. This variable is used in the $args array
    $labels = array(
        'name'               => __( 'Slider' ),
        'singular_name'      => __( 'Slider' ),
        'add_new'            => __( 'Add New Slider' ),
        'add_new_item'       => __( 'Add New Slider' ),
        'edit_item'          => __( 'Edit Slider' ),
        'new_item'           => __( 'New Slider' ),
        'all_items'          => __( 'All Sliders' ),
        'view_item'          => __( 'View Slider' ),
        'search_items'       => __( 'Search Slider' ),
        'featured_image'     => 'Slider Image',
        'set_featured_image' => 'Add Slider Image'
    );
// The arguments for our post type, to be entered as parameter 2 of register_post_type()
    $args = array(
        'labels'            => $labels,
        'description'       => 'Slider image and details add',
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
    register_post_type('slider', $args);
}