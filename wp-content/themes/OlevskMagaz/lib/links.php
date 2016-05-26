<?php

function init_styles(){
    wp_enqueue_style( 'main', get_template_directory_uri() . '/lib/css/main.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style( 'fa', get_template_directory_uri() . '/lib/font-awesome-4.2.0/css/font-awesome.min.css');
    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/lib/fancybox/jquery.fancybox.css');
}

function init_scripts(){
    wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/lib/jquery/jquery-1.11.1.min.js');
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script( 'fancybox-js', get_template_directory_uri() . '/lib/fancybox/jquery.fancybox.js');
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/lib/js/main.js');
}
add_action('wp_print_styles', 'init_styles');
add_action('wp_enqueue_scripts', 'init_scripts');


