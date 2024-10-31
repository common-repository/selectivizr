<?php
/*
Plugin Name: Selectivizr for WordPress
Plugin URI: http://www.ramoonus.nl/wordpress/selectivizr/
Description: Selectivizr is a JavaScript utility that emulates CSS3 pseudo-classes and attribute selectors in Internet Explorer 6-8. 
Version: 2.0.3.2
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/

function rw_selectivizr() {
	wp_deregister_script('selectivizr');
    wp_enqueue_script('selectivizr',plugins_url( '/js/selectivizr.js' , __FILE__ ), array(), '1.0.3' );
} 
// load
add_action('wp_enqueue_scripts', 'rw_selectivizr');