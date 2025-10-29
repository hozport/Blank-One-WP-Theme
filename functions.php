<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* 1. Базовые константы */
define( 'BLANK_URI', get_template_directory_uri() );
define( 'BLANK_PATH', get_template_directory() );
define( 'BLANK_VER', wp_get_theme()->get( 'Version' ) );

/* 2. Подключаем модули */
require BLANK_PATH . '/inc/theme-setup.php';
require BLANK_PATH . '/inc/breadcrumb.php';

/* 3. Подключаем стили и скрипты */
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'blank-main', get_template_directory_uri() . '/assets/css/main.css', [], '1.0' );
} );

if ( class_exists( 'WooCommerce' ) ) {
    require BLANK_PATH . '/woocommerce/woocommerce.php';
}

/* Отключаем лишнее */
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'the_generator', '__return_empty_string' );
add_filter( 'emoji_svg_url', '__return_false' );
add_filter( 'show_admin_bar', '__return_false' );

/* Разрешаем SVG */
add_filter( 'upload_mimes', function ( $m ) {
    $m['svg'] = 'image/svg+xml';
    return $m;
} );

/* Убираем типы размеров миниатюр */
add_filter( 'intermediate_image_sizes', function ( $sizes ) {
    return array_diff( $sizes, [ 'medium_large', '1536x1536', '2048x2048' ] );
} );

/* Добавляем класс к кнопке «Показать ещё» для пагинации */
add_filter( 'next_posts_link_attributes', function () {
    return 'class="btn js-load-more"';
} );