<?php

function register_styles() {
    /* Подключение файла style.css */
    wp_register_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'register_styles');