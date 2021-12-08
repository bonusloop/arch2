<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'arch_styles' );
add_action( 'wp_enqueue_scripts', 'arch_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function arch_styles() {
    wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'magnific-popup-style', get_template_directory_uri() . '/libs/Magnific-Popup/magnific-popup.css' );
    wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/libs/slick/slick.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

function arch_scripts() {
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
	wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'magnific-script', get_template_directory_uri() . '/libs/Magnific-Popup/jquery.magnific-popup.min.js', array('jquery'), null);
    wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/libs/slick/slick.min.js', array('jquery'), null);
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), null);
}