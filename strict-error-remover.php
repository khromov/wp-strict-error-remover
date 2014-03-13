<?php
/*
Plugin Name: Strict Error Remover
Plugin URI:
Description: Removes E_STRICT errors in PHP >5.4. Put this file in /wp-content/mu-plugins
Version: 2014.03.13
Author: khromov
Author URI: http://profiles.wordpress.org/khromov/
License: GPL2
*/

if (WP_DEBUG && WP_DEBUG_DISPLAY)
	ini_set('error_reporting', E_ALL & ~E_STRICT); // & ~E_DEPRECATED