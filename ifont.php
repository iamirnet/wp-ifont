<?php
/*
Plugin Name: آی فونت
Author URI:http://iamir.net
Version: 1.0
Plugin URI:http://iamir.net
Description: افزونه تغییر فونت به فارسی
Author:Amirhossein Jahani
*/

function iamir_net_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('iamir_net-style', plugin_dir_url(__DIR__ . '/assets/css/file') . 'styles.css',array(), '1.1', 'all');
    wp_enqueue_script( 'iamir_net-script', plugin_dir_url(__DIR__ . '/assets/js/file') . 'script.js' , array ( 'jquery' ), 1.1, true);
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'iamir_net_scripts' );

add_action('admin_enqueue_scripts', 'iamir_net_admin_style');

function iamir_net_admin_style() {
    wp_register_style('iamir_net_reg_admin_style', plugin_dir_url(__DIR__ . '/assets/css/file') . 'admin.css');
    wp_enqueue_style('iamir_net_reg_admin_style');
}
