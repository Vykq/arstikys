<?php
require_once ('includes/blocks.php');
require_once ('includes/default.php');
/**
 * Theme files
 */

function webpack_files() {
    wp_enqueue_script('webpack-js', get_theme_file_uri('assets/app.js'), [ 'wp-util' ], '1.1.46', true);
    wp_enqueue_script('AnimateScroll', get_theme_file_uri('assets/AnimateScroll.min.js'), [ 'wp-util' ], '1.1.45', true);
    wp_enqueue_style('webpack-styles', get_theme_file_uri('assets/style.css'), array(), '1.1.4');
    wp_localize_script( 'webpack-js', 'themeUrl',
        array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce( 'wp-smart-sign-nonce' ),
            'themeUrl' => get_theme_file_uri(),
            'see' => __('Žiūrėti', 'core'),
            'min' => __('min', 'core'),
            'sec' => __('s', 'core'),
            'loading' => __('Siunčiami duomenys...', 'core'),
            'success' => __('Jūsų užklausą gavome! Susisieksime su Jumis netrukus.', 'core'),
            'failure' => __('Kažkas negerai, prašome bandyti vėliau', 'core'),
            'name_empty' => __('Empty Name field', 'core'),
            'name_error' => __('Bad name field', 'core'),
            'file_empty' => __('Nepridėjote jokio failo', 'core'),
            'surname_empty' => __('Neužpildytas pavardės laukelis', 'core'),
            'surname_error' => __('Neteisingai užpildytas pavardės laukelis', 'core'),
            'phone_empty' => __('Empty phone number field.', 'core'),
            'phone_error' => __('Bad phone number field.', 'core'),
            'mail_empty' => __('Empty e. mail field.', 'core'),
            'mail_error' => __('Bad e. mail field.', 'core'),
            'msg_empty' => __('Empty message... Please enter something.', 'core'),
        )
    );
    //wp_enqueue_script('splide-js', get_theme_file_uri('assets/splide.min.js'), array(), '4.1.4', true);
    //wp_enqueue_style('splide-styles', get_theme_file_uri('assets/splide.min.css'), array(), '4.1.4');
}
add_action('wp_enqueue_scripts', 'webpack_files');

//show_admin_bar(false);

function theme_features() {
    load_theme_textdomain( 'core', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'theme_features');
update_option('rsssl_skip_challenge_directory_request', true);


function theme_post_types()
{
    register_post_type('news', array(
        'rewrite' => array('slug' => _x( 'news', 'slug', 'core' )),
        'has_archive' => false,
        'public' => true,
        'menu_position' => -1,
        'labels' => array(
            'name' => 'News',
            'add_new_item' => 'Add new topic',
            'edit_item' => 'Edit new',
            'all_items' => 'All News',
            'singular_name' => 'New'
        ),
        'supports' => array (
            'title',
            'page-attributes',
            'editor',
            'thumbnail'
        ),
        'menu_icon' => 'dashicons-groups',
        'show_in_rest' => true
    ));

    register_post_type('faq', array(
        'rewrite' => array('slug' => _x( 'faqs', 'slug', 'core' )),
        'has_archive' => false,
        'public' => true,
        'menu_position' => -1,
        'labels' => array(
            'name' => 'Faqs',
            'add_new_item' => 'Add faq',
            'edit_item' => 'Edit faq',
            'all_items' => 'All faq',
            'singular_name' => 'FAQ'
        ),
        'supports' => array (
            'title',
            'page-attributes',
        ),
        'menu_icon' => 'dashicons-format-chat',
        'show_in_rest' => true
    ));
}

add_action('init', 'theme_post_types');


