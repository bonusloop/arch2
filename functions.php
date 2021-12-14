<?php

define('THEME_ROOT', get_template_directory_uri());
define('CSS_DIR', THEME_ROOT . '/assets/css');
define('JS_DIR', THEME_ROOT . '/assets/js');
define('LIBS_DIR', THEME_ROOT . '/assets/libs');
define('IMG_DIR', THEME_ROOT . '/assets/img');

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'arch_styles' );
add_action( 'wp_enqueue_scripts', 'arch_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
add_action( 'after_setup_theme', 'arch_theme_register_nav_menu' );


function arch_styles() {
    wp_enqueue_style( 'normalize-style', CSS_DIR . '/normalize.css');
    wp_enqueue_style( 'magnific-popup-style', LIBS_DIR . '/Magnific-Popup/magnific-popup.css' );
    wp_enqueue_style( 'slick-style', LIBS_DIR . '/slick/slick.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

function arch_scripts() {
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
	wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'magnific-script', LIBS_DIR . '/Magnific-Popup/jquery.magnific-popup.min.js', array('jquery'), null);
    wp_enqueue_script( 'slick-script', LIBS_DIR . '/slick/slick.min.js', array('jquery'), null);
    wp_enqueue_script( 'main-script', JS_DIR . '/main.js', array('jquery'), null);
}

function arch_theme_register_nav_menu() {
	register_nav_menu( 'header_menu', 'Header Menu' );
}