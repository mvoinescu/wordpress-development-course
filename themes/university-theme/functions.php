<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 2/5/2019
 * Time: 8:38 AM
 */

	function university_files(){
		wp_enqueue_script('main-script', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
		wp_enqueue_style('style-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
		wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
	}

	add_action('wp_enqueue_scripts', 'university_files');

	function function_name (){

		add_theme_support('title-tag');
		register_nav_menu('headerMenuLocation', 'Header Menu Location');
		register_nav_menu('footerMenuLocation_01', 'Footer Menu Location One');
		register_nav_menu('footerMenuLocation_02', 'Footer Menu Location Two');

	}
	add_action('after_setup_theme', 'function_name');






