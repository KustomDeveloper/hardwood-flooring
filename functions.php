<?php

/*
*  Enqueue Scripts
*/
function jsa_theme_scripts() {

    wp_enqueue_style( 'magnific-css', get_template_directory_uri() . '/css/magnific-popup.min.css' );
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Archivo:wght@400;500;600;700;800&display=swap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script('jquery'); 
    wp_enqueue_script( 'magnific-js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), null, true );
    wp_enqueue_script( 'lazyJs', get_template_directory_uri() . '/js/jquery.lazy.min.js', array(), null, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );

    /*
    *  Localize Script
    */
    $business_phone = get_theme_mod('bus_info_phone');
    $jsdata = array(
        'phone' => $business_phone
    );
    wp_localize_script('main', 'businessData', $jsdata);
}
add_action( 'wp_enqueue_scripts', 'jsa_theme_scripts' );

/*
*  Disable Gutenberg
*/
add_filter('use_block_editor_for_post', '__return_false', 10);

/*
*  Register Nav Menus
*/
register_nav_menus( array(
	'main_menu' => 'Main Menu',
) );

/*
*  Add Post Thumbnails
*/
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 150, 150, true );
add_image_size( 'testimonial-thumbnail', 150, 150 );

/*
*  Add Customizer Options
*/
function add_business_info($wp_customize) {
    // Theme Options Panel
    $wp_customize->add_panel( 'bus_info', 
        array(
            'priority'       => 10,
            'title'            => __( 'Business Information', 'carpet_cleaning' ),
            'description'      => __( 'Add business information', 'carpet_cleaning' ),
        ) 
    );
    // Theme Section
    // Section id
    $section_id = ['contact_info', 'social_info'];
    // Section title
    $section_title = ['Contact Information', 'Social Media Information'];

    foreach($section_id as $key => $section) {
          $wp_customize->add_section($section,
            array(
                'title' => __( $section_title[$key], 'carpet_cleaning'),
                'priority' => 1,
                'panel' => 'bus_info'
            ) 
          );
    }
    // Theme Settings

    // Unique Setting id, must match Control id
    $setting_id = ['bus_info_phone', 'bus_info_facebook', 'bus_info_twitter', 'bus_info_linkedin', 'bus_info_youtube', 'bus_info_pinterest', 'bus_info_email', 'bus_info_street_address', 'bus_info_city_address', 'bus_info_state_address', 'bus_info_zip_address', 'bus_info_map_url', 'bus_info_video_id_1', 'bus_info_video_id_2', 'bus_info_video_id_3', 'bus_info_video_id_4'];
    // Default value
    $setting_default = ['555.555.5555', '#', '#', '#', '#', '#', 'info@mywebsite.com', '555 Star Lane', 'Beverly Hills', 'Ca', '90210', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13552.084686803144!2d-106.586519!3d31.878840999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa6abee6794e19771!2sKitchen%20Remodeling%20Pro%20El%20Paso%20TX!5e0!3m2!1sen!2stw!4v1643126331757!5m2!1sen!2stw', 'mnpWftvGbBY', 'yA5zi_gSae4', 'bpQz23YBruM', 'bMoQ9WqqG-8'];
    // Sanitize callback

    foreach($setting_id as $key => $id) {
        $wp_customize->add_setting( $id,
            array(
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'default'           => __( $setting_default[$key], 'carpet_cleaning' ),
                'transport'         => 'refresh',
                'sanitize_callback' => 'wp_kses_post'
            )
        );
    }

    // Theme Control

    //Unique Control id, must match Setting id
    $control_id = ['bus_info_phone', 'bus_info_facebook', 'bus_info_twitter', 'bus_info_linkedin', 'bus_info_youtube', 'bus_info_pinterest', 'bus_info_email', 'bus_info_street_address', 'bus_info_city_address', 'bus_info_state_address', 'bus_info_zip_address', 'bus_info_map_url', 'bus_info_video_id_1', 'bus_info_video_id_2', 'bus_info_video_id_3', 'bus_info_video_id_4'];
    //Section input is part of
    $control_section = ['contact_info', 'social_info', 'social_info', 'social_info', 'social_info', 'social_info', 'contact_info','contact_info', 'contact_info', 'contact_info', 'contact_info', 'contact_info', 'social_info', 'social_info', 'social_info', 'social_info'];
    //Type of Input
    $control_type = ['text', 'text', 'text', 'text', 'text', 'text', 'text', 'text', 'text', 'text', 'text', 'url', 'text', 'text', 'text', 'text'];
    //Input Description
    $control_description = ['Number placed here will be outputted in all CTA boxes', 'Facebook link used for all social media buttons','Twitter link used for all social media buttons', 'LinkedIn link used for all social media buttons', 'YouTube link used for all social media buttons', 'Pinterest link used for all social media buttons', 'Email address placed in footer', 'Street address placed in footer', 'City location placed in footer', 'State location placed in footer', 'Zip location placed in footer', 'Place Google map url here', 'Video Id 1', 'Video Id 2', 'Video Id 3', 'Video Id 4'];
    //Input Label
    $control_label = ['Phone Number', 'Facebook Link', 'Twitter Link', 'Linkedin Link', 'YouTube Link', 'Pinterest Link', 'Email Address', 'Street Address', 'City', 'State', 'Zip', 'Google Map Url', 'Video Id 1', 'Video Id 2', 'Video Id 3', 'Video Id 4'];

    foreach($control_id as $key => $id) {
        $wp_customize->add_control( $id, 
            array(
                'type'        => $control_type[$key],
                'priority'    => 10,
                'section'     => $control_section[$key],
                'label'       => $control_label[$key],
                'description' => $control_description[$key]
            ) 
        );
    }
}

add_action('customize_register', 'add_business_info');