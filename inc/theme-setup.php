<?php
add_action( 'after_setup_theme', function () {
    load_theme_textdomain( 'blank', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );

    register_nav_menus( [
        'primary' => esc_html__( 'Primary Menu', 'blank' ),
        'footer'  => esc_html__( 'Footer Menu', 'blank' ),
    ] );
} );