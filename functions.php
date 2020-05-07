<?php

/* Setup Theme
-------------------------------------------------------- */
if (!function_exists('woostrap_setup_theme')) {
    function woostrap_setup_theme()
    {
        // Custom menu
        register_nav_menu('header', __('Primary Menu', 'novatest'));

        // Aggiungo supporto per visualizzare immagine in evidenza nei post
        // add_theme_support('post-thumbnails');
    }
}
add_action('after_setup_theme', 'woostrap_setup_theme');

/* Javascript
-------------------------------------------------------- */
if (!function_exists('woostrap_scripts')) {
    function woostrap_scripts()
    {
        // wp_enqueue_script('novatest-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', null, true); // jquery
        // wp_enqueue_script('novatest-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', null, true); // bootstrap
        // wp_enqueue_script('novatest-vue', get_template_directory_uri() . '/assets/js/vue.min.js', null, true); // vue
        // wp_enqueue_script('novatest-axios', get_template_directory_uri() . '/assets/js/axios.min.js', null, true); // axios
        // wp_enqueue_script('novatest-clamp-js', get_template_directory_uri() . '/assets/js/clamp.min.js', null, true); // clamp
        wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', null, true); // custom
    }
}
add_action('wp_enqueue_scripts', 'woostrap_scripts');
