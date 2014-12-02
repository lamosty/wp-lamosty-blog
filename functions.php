<?php
/**
 * @ WebVision.sk 2014
 */

function lamosty_setup() {
    load_theme_textdomain('lamosty-blog', get_template_directory() . '/languages');
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
