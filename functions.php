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
add_action( 'init', 'register_post_types' );


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
    register_nav_menu( 'footer_menu', 'Footer Menu' );
}

function register_post_types(){
	register_post_type( 'features', [
		'labels' => [
			'name'               => 'features', // основное название для типа записи
			'singular_name'      => 'feature', // название для одной записи этого типа
			'add_new'            => 'Добавить feature', // для добавления новой записи
			'add_new_item'       => 'Добавление feature', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование feature', // для редактирования типа записи
			'new_item'           => 'Новое feature', // текст новой записи
			'view_item'          => 'Смотреть feature', // для просмотра записи этого типа.
			'search_items'       => 'Искать feature', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name'          => 'features', // название меню
		],
		'public'              => false,
	    'show_ui'             => true, // зависит от public
		'menu_icon'           => 'dashicons-carrot',
		'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	] );
}