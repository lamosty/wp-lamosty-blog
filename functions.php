<?php
/**
 * @ WebVision.sk 2014
 */

function lamosty_setup() {
    load_theme_textdomain('lamosty-blog', get_template_directory() . '/languages');

    register_nav_menus(array(
        'primary_menu' => 'Primary Menu',
        'secondary_logged_out' => 'Secondary Menu — Logged Out',
        'secondary_logged_in' => 'Secondary Menu — Logged In'
    ));

    add_theme_support('custom-header', array(
        'default-image' => get_template_directory_uri() . '/images/logo.png',
        'width' => 40,
        'height' => 40
    ));
}

add_action('after_setup_theme', 'lamosty_setup');

function lamosty_format_translated_site_title() {
    $site_title = get_bloginfo('title');

    $site_title_default = 'Site Title';
    $translated_site_title = __('Site Title', 'lamosty-blog');

    if ($site_title_default != $translated_site_title) {
        $site_title = $translated_site_title;
    }

    return $site_title;
}

function lamosty_do_title($title) {
    $site_title = lamosty_format_translated_site_title();

    if (empty($title) && (is_home() || is_front_page())) {
        return $site_title;
    }

    return single_post_title() . ' | ' . $site_title;

}

add_filter('wp_title', 'lamosty_do_title');

function lamosty_register_scripts_styles() {
    $theme_dir_uri = get_template_directory_uri();

    /**
     * Register Twitter Bootstrap 3
     */
    wp_register_style('twitter-bootstrap', $theme_dir_uri . '/dist/css/bootstrap.min.css', array(), '3');
    wp_register_script('twitter-bootstrap', $theme_dir_uri . '/dist/js/bootstrap.min.js', array(
        'jquery'
    ), '3', true);

    /**
     * Enqueue Twitter Bootstrap 3
     */
    wp_enqueue_style('lamosty-theme-style', $theme_dir_uri . '/dist/css/theme-style.css', array(
        'twitter-bootstrap'
    ));
    wp_enqueue_script('twitter-bootstrap');
}

add_action('wp_enqueue_scripts', 'lamosty_register_scripts_styles');

