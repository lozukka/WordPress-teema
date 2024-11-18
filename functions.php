<?php 
register_nav_menus(['primary' => 'Päävalikko']);

function meriteema_assets() {
    wp_enqueue_style ('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'meriteema_assets');

function meriteema_widgets_init() {
    register_sidebar( array(
        'name' => 'Sivupalkki',
        'id' => 'sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'befote_title' => '<h2>',
        'after_title' => '</h2>'
    ));
    register_sidebar( array(
        'name' => 'Footer1',
        'id' => 'footer-1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'befote_title' => '<h2>',
        'after_title' => '</h2>'     
    ));
    register_sidebar( array(
        'name' => 'Footer2',
        'id' => 'footer-2',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'befote_title' => '<h2>',
        'after_title' => '</h2>'     
    ));
    register_sidebar( array(
        'name' => 'Footer3',
        'id' => 'footer-3',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'befote_title' => '<h2>',
        'after_title' => '</h2>'     
    ));
}
add_action('widgets_init', 'meriteema_widgets_init');

function excerpt_read_more () {
    global $post;
    return ' <a href="' . get_permalink($post ->ID) . '">Lue lisää &raquo;</a>';
}
add_filter('excerpt_more', 'excerpt_read_more');

function meriteema_theme_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'meriteema_theme_setup');

?> 