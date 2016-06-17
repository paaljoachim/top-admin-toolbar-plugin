<?php

/**
 *
 * @wordpress-plugin
 * Plugin Name:       Top Admin toolbar icons
 * Plugin URI:        http://easywebdesigntutorials.com/
 * Description:       Toop Admin Toolbar that includes each main section with icons
 * Version:           1.0.0
 * Author:            Paal Joachim Romdahl
 * Author URI:        http://easywebdesigntutorials.com/
 
/* Register style sheet. */
add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );

/**
 * Register style sheet.
 */
function register_plugin_styles() {
	wp_register_style( 'top-admin-toolbar-icons', plugins_url( 'top-admin-toolbar-icons/css/top-admin-bar-icons.css' ) );
	wp_enqueue_style( 'top-admin-toolbar-icons' );
}

include_once( get_template_directory() . '/inc/top-admin-bar.php' );


 
