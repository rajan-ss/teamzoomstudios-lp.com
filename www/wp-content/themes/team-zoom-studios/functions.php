<?php

// Variables

// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/head.php'));
include(get_theme_file_path('/includes/setup.php'));

// Hooks
add_action('wp_enqueue_scripts', 'tzs_enqueue');
add_action('wp_head', 'tzs_head', 5);
add_action('after_setup_theme', 'tzs_setup_theme');

// Gravity form Disable loading of CSS files
add_filter('gform_disable_css', '__return_true');