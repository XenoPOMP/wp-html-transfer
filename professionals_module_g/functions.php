<?php

class Enqueuer {
    function register_style($name, $path) {
        wp_register_style($name, get_template_directory_uri() . $path);
        wp_enqueue_style($name);
    }

    function register_script($name, $path) {
        wp_register_script($name, get_template_directory_uri() . $path);
        wp_enqueue_script($name);
    }
}

function register_styles() {
    /* Подключение стилей - новое */
    $enqueue = new Enqueuer();

    $enqueue->register_style('style', '/css/style.css');
    $enqueue->register_style('vendor', '/css/vendor.css');
    $enqueue->register_style('main', '/css/main.css');

}

function register_scripts() {
    /* Подключение стилей - новое */
    $enqueue = new Enqueuer();

    $enqueue->register_script('jquery', '/js/jquery-3.2.1.min.js');
    $enqueue->register_script('main', '/js/main.js');
    $enqueue->register_script('medernizr', '/js/modernizr.js');
    $enqueue->register_script('plugins', '/js/plugins.js');
}

add_action('wp_enqueue_scripts', 'register_styles');
add_action('wp_enqueue_scripts', 'register_scripts');