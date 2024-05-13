<?php
function phpfreakz_menus(){
    $locations = array(
        'primary' => "Desktop Primary top bar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);

}
add_action('init', 'phpfreakz_menus');


function phpfreakz_footer_menus(){
    $locations = array(
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);
}
add_action('init', 'phpfreakz_footer_menus');


function phpfreakz_add_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
   
}

add_action('after_setup_theme', 'phpfreakz_add_theme_support');




function phpfreakz_additional_menu_1(){
    register_nav_menu('additional1', "Additional Menu 1");
}

add_action('init', 'phpfreakz_additional_menu_1');

function phpfreakz_additional_menu_2(){
    register_nav_menu('additional2', "Additional Menu 2");
}

add_action('init', 'phpfreakz_additional_menu_2');

function phpfreakz_additional_menu_3(){
    register_nav_menu('additional3', "Additional Menu 3");
}

add_action('init', 'phpfreakz_additional_menu_3');

function phpfreakz_additional_menu_4(){
    register_nav_menu('additional4', "Additional Menu 4");
}

add_action('init', 'phpfreakz_additional_menu_4');


// function to add intro section in frontpage by customizer




function phpfreakz_add_intro_section($wp_customize) {
    // Add a new section
    $wp_customize->add_section('phpfreakz_intro_section', array(
        'title' => 'Intro Section',
        'priority' => 30,
        'description' => 'Customize the Intro Section',
    ));

    // Add settings and controls for each field
    $wp_customize->add_setting('left_intro', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('left_intro', array(
        'label' => 'Left Intro',
        'section' => 'phpfreakz_intro_section',
        'type' => 'textarea',
    ));

    // Repeat the above two blocks for 'right_intro' and 'cta'

    $wp_customize->add_setting('right_intro', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('right_intro', array(
        'label' => 'Right Intro',
        'section' => 'phpfreakz_intro_section',
        'type' => 'textarea',
    ));


    $wp_customize->add_setting('cta', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cta', array(
        'label' => 'Call to Action',
        'section' => 'phpfreakz_intro_section',
        'type' => 'textarea',
    ));

    // Add a setting and control for the display setting

    $wp_customize->add_setting('display_intro', array(
        'default' => 'no',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('display_intro', array(
        'label' => 'Display Intro Section',
        'section' => 'phpfreakz_intro_section',
        'type' => 'radio',
        'choices' => array(
            'yes' => 'Yes',
            'no' => 'No',
        ),
    ));

    


}

add_action('customize_register', 'phpfreakz_add_intro_section');



function intro_section_settings() {
    register_setting('intro-section-settings', 'display_intro');
    add_settings_section('intro-section-main', 'Main Settings', null, 'intro-section-settings');
    add_settings_field('display-intro', 'Display Intro Section', 'display_intro_field', 'intro-section-settings', 'intro-section-main');
}
add_action('admin_init', 'intro_section_settings');

function display_intro_field() {
    $display_intro = get_option('display_intro');
    echo '<input type="checkbox" name="display_intro" value="1" ' . checked(1, $display_intro, false) . ' />';
}
// Turn on the intro section


function mytheme_customize_register( $wp_customize ) {
    // Add setting for intro section
    $wp_customize->add_setting( 'mytheme_intro_display', array(
        'default'           => 'no',
        'sanitize_callback' => 'mytheme_sanitize_yes_no',
    ) );

    // Add control for intro section
    // $wp_customize->add_control( 'mytheme_intro_display', array(
    //     'label'    => __( 'Display Intro Section', 'mytheme' ),
    //     'section'  => 'static_front_page',
    //     'type'     => 'radio',
    //     'choices'  => array(
    //         'yes' => __( 'Yes', 'mytheme' ),
    //         'no'  => __( 'No', 'mytheme' ),
    //     ),
    // ) );

    // Add setting for selecting page under blogitems
    $wp_customize->add_setting( 'mytheme_blogitems_page', array(
        'default'           => '',
        'sanitize_callback' => 'absint', // Assuming the page ID is an integer value
    ) );

    // Add control for selecting page under blogitems
    
    
    // Add control for selecting page under blogitems
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'mytheme_blogitems_page',
        array(
            'label' => __('Select Page to Display under Blog Items', 'mytheme'),
            'section' => 'static_front_page',
            'type' => 'select',
            'choices' => array('' => '--Select--') + get_pages_array(),
        )
    ));
    

}
add_action( 'customize_register', 'mytheme_customize_register' );

function mytheme_sanitize_yes_no( $input ) {
    $valid = array(
        'yes' => __( 'Yes', 'mytheme' ),
        'no'  => __( 'No', 'mytheme' ),
    );

    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return 'no'; // Set a default value if the input is invalid
    }
}

function get_pages_array() {
    $pages = get_pages();
    $pages_array = array();
    foreach ($pages as $page) {
        $pages_array[$page->ID] = $page->post_title;
    }
    return $pages_array;
}

add_action('customize_register', 'mytheme_customize_register');





?>