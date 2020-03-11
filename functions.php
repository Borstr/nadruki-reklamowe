<?php

function load_css() {
    wp_register_style('global', get_template_directory_uri() . '/css/global.css', array(), false, 'all');

    wp_enqueue_style('global');
}

add_action('wp_enqueue_scripts', 'load_css');