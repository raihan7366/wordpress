<?php
function my_menu(){
    register_nav_menus(array(
        'main_menu'=>"Main Menu",
        'footer_menu1'=>"Footer Section 1",
        'footer_menu2'=>"Footer Section 2",
        'social_option'=>"Social Option",
    ));
}

add_action('init','my_menu');

add_filter( 'nav_menu_css_class', function ( $classes, $item, $args, $depth ) {
    if (property_exists($args, 'li_class')) {
        $arr_classes = explode(' ', $args->li_class);
        $classes = array_merge($classes, $arr_classes);
    }
    if (property_exists($args, "li_class_$depth")) {
        $arr_classes = explode(' ', $args->{"li_class_$depth"});
        $classes = array_merge($classes, $arr_classes);
    }

    return $classes;
}, 1, 4 );

// custom logo
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

                        //*********** Slider *****************//
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
        // 'featured_image'     => 'Slider Image',
        'featured_image'     => 'Banner Image',
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
add_theme_support('post-thumbnails');
add_image_size('full', 9999, 9999, false);

                            //*********** Category Icon *****************//

// Category Icon post type
add_action( 'init', 'category_icon' );
// The custom function to register a custom article post type
function category_icon() {
    // Set the labels. This variable is used in the $args array
    $labels = array(
        'name'               => __( 'category icon' ),
        'singular_name'      => __( 'category_icon' ),
        'add_new'            => __( 'Add New category icon' ),
        'add_new_item'       => __( 'Add New category icon' ),
        'edit_item'          => __( 'Edit category icon' ),
        'new_item'           => __( 'New category icon' ),
        'all_items'          => __( 'All category icon' ),
        'view_item'          => __( 'View category icon' ),
        'search_items'       => __( 'Search category icon' ),
        // 'featured_image'     => 'category_icon Image',
        'featured_image'     => 'category icon',
        'set_featured_image' => 'Add category icon Image'
    );
// The arguments for our post type, to be entered as parameter 2 of register_post_type()
    $args = array(
        'labels'            => $labels,
        'description'       => 'category_icon image and details add',
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
    register_post_type('category_icon', $args);
}
add_theme_support('post-thumbnails');
add_image_size('full', 9999, 9999, false);

                //*********** Buy Furniture Based on Spaces *****************//
                
// Product Categories post type
add_action( 'init', 'my_theme_product_cat_HF' );
// The custom function to register a custom article post type
function my_theme_product_cat_HF() {
    // Set the labels. This variable is used in the $args array
    $labels = array(
        'name'               => __( 'product cat' ),
        'singular_name'      => __( 'product_cat' ),
        'add_new'            => __( 'Add New product cat' ),
        'add_new_item'       => __( 'Add New product cat' ),
        'edit_item'          => __( 'Edit product cat' ),
        'new_item'           => __( 'New product cat' ),
        'all_items'          => __( 'All product cat' ),
        'view_item'          => __( 'View product cat' ),
        'search_items'       => __( 'Search product cat' ),
        // 'featured_image'     => 'product_cat Image',
        'featured_image'     => 'product cat Image',
        'set_featured_image' => 'Add product cat Image'
    );
// The arguments for our post type, to be entered as parameter 2 of register_post_type()
    $args = array(
        'labels'            => $labels,
        'description'       => 'product_cat image and details add',
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
    register_post_type('product_cat_HF', $args);
}
add_theme_support('post-thumbnails');
add_image_size('full', 9999, 9999, false);

                //*********** Office Furniture *****************//
                
// Product Categories post type
add_action( 'init', 'my_theme_product_cat_OF' );
// The custom function to register a custom article post type
function my_theme_product_cat_OF() {
    // Set the labels. This variable is used in the $args array
    $labels = array(
        'name'               => __( 'Office Furniture' ),
        'singular_name'      => __( 'product_cat' ),
        'add_new'            => __( 'Add New Office Furniture' ),
        'add_new_item'       => __( 'Add New Office Furniture' ),
        'edit_item'          => __( 'Edit Office Furniture' ),
        'new_item'           => __( 'New Office Furniture' ),
        'all_items'          => __( 'All Office Furniture' ),
        'view_item'          => __( 'View Office Furniture' ),
        'search_items'       => __( 'Search Office Furniture' ),
        // 'featured_image'     => 'product_cat Image',
        'featured_image'     => 'Office Furniture Image',
        'set_featured_image' => 'Add Office Furniture Image'
    );
// The arguments for our post type, to be entered as parameter 2 of register_post_type()
    $args = array(
        'labels'            => $labels,
        'description'       => 'Office Furniture image and details add',
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
    register_post_type('product_cat_OF', $args);
}
add_theme_support('post-thumbnails');
add_image_size('full', 9999, 9999, false);


// ********************************my theme option********************************//
include_once('WPEX_Options_Panel.php');
// Register new Options panel.
$panel_args = [
    'title'           => 'My Theme Options',
    'option_name'     => 'my_options',
    'slug'            => 'my-options-panel',
    'user_capability' => 'manage_options',
];

$panel_settings = [
    'email_address' => [
        'label'       => esc_html__( 'Email Address', 'text_domain' ),
        'type'        => 'text',
        'description' => 'Company Email address',
    ],
    'contact_number' => [
        'label'       => esc_html__( 'Contact Number', 'text_domain' ),
        'type'        => 'text',
        'description' => 'Company Contact Number',
    ],
    'footer_image_list' => [
        'label'       => esc_html__( 'Bank List Image', 'text_domain' ),
        'type'        => 'image',
        'description' => 'This image will show Banks List.',
    ],
    'footer_about_company' => [
        'label'       => esc_html__( 'About Company', 'text_domain' ),
        'type'        => 'text',
        'description' => 'Company about title.',
    ],
    'footer_about_company_description' => [
        'label'       => esc_html__( 'Description', 'text_domain' ),
        'type'        => 'textarea',
        'description' => 'Company Description.',
    ],
    'footer_deliver_in' => [
        'label'       => esc_html__( 'Deliver Title', 'text_domain' ),
        'type'        => 'text',
        'description' => 'Deliver In title.',
    ],
    'footer_delivery_description' => [
        'label'       => esc_html__( 'Deliver In Description', 'text_domain' ),
        'type'        => 'textarea',
        'description' => 'Delivery Description.',
    ],
    'footer_copyright' => [
        'label'       => esc_html__( 'Copyright', 'text_domain' ),
        'type'        => 'textarea',
        'description' => 'Copyright Description.',
    ],
    'main_PFBC' => [
        'label'       => esc_html__( 'Popular Furniture Title', 'text_domain' ),
        'type'        => 'textarea',
        'description' => 'Head Title.',
    ],
    'main_PFBC_tag' => [
        'label'       => esc_html__( 'Popular Furniture Title tagline', 'text_domain' ),
        'type'        => 'textarea',
        'description' => 'Tag Line.',
    ],
    'main_BFBS' => [
        'label'       => esc_html__( 'Buy Furniture Title', 'text_domain' ),
        'type'        => 'textarea',
        'description' => 'Head Title.',
    ],
    'main_BFBS_tag' => [
        'label'       => esc_html__( 'Buy Furniture Title tagline', 'text_domain' ),
        'type'        => 'textarea',
        'description' => 'Tag Line.',
    ],
    'main_OFC' => [
        'label'       => esc_html__( 'Office Furniture Title', 'text_domain' ),
        'type'        => 'textarea',
        'description' => 'Head Title.',
    ],
    'main_OFC_tag' => [
        'label'       => esc_html__( 'Office Furniture Title tagline', 'text_domain' ),
        'type'        => 'textarea',
        'description' => 'Tag Line.',
    ],


    'footer_certification' => [
        'label'       => esc_html__( 'Certification', 'text_domain' ),
        'type'        => 'image',
        'description' => 'Will show Certification.',
    ],
];

new WPEX_Options_Panel( $panel_args, $panel_settings );

function register_address_widget_area() {
    register_sidebar(
        array(
            'id' => 'address-widget-area',
            'name' => esc_html__( 'Footer Address', 'theme-domain' ),
            'description' => esc_html__( 'Your address in footer', 'theme-domain' ),
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => ''
        )
    );
}
    add_action( 'widgets_init', 'register_address_widget_area' );