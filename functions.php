<?php

function load_css() {
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');

    wp_enqueue_style('main');
}

function load_js() {
    wp_register_script('main', get_template_directory_uri() . '/js/main.js', false, false, true);
    
    wp_enqueue_script('main');
}

add_action('wp_enqueue_scripts', 'load_css');
add_action('wp_enqueue_scripts', 'load_js');
remove_filter ('the_excerpt', 'wpautop');
remove_filter ('the_content', 'wpautop');
remove_filter('term_description','wpautop');
