<?php

/* Setup Theme
-------------------------------------------------------- */
if (!function_exists('woostrap_setup_theme')) {
    function woostrap_setup_theme()
    {
        // Custom menu
        register_nav_menu('header', __('Primary Menu', 'novatest'));
    }
}
add_action('after_setup_theme', 'woostrap_setup_theme');

/* Javascript
-------------------------------------------------------- */
if (!function_exists('woostrap_scripts')) {
    function woostrap_scripts()
    {
        // wp_enqueue_script('novatest-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', null, true); // jquery
        wp_enqueue_script('woostrap-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', null, true); // bootstrap
        // wp_enqueue_script('novatest-vue', get_template_directory_uri() . '/assets/js/vue.min.js', null, true); // vue
        // wp_enqueue_script('novatest-axios', get_template_directory_uri() . '/assets/js/axios.min.js', null, true); // axios
        // wp_enqueue_script('novatest-clamp-js', get_template_directory_uri() . '/assets/js/clamp.min.js', null, true); // clamp
        wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', null, true); // custom
    }
}
add_action('wp_enqueue_scripts', 'woostrap_scripts');

/* CSS
-------------------------------------------------------- */
if (!function_exists('woostrap_styles')) {
    function woostrap_styles()
    {
        wp_enqueue_style('custom-novatest-css', get_template_directory_uri() . '/assets/css/custom.min.css');
    }
}
add_action('wp_enqueue_scripts', 'woostrap_styles');
