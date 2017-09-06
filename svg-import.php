<?php
/**
* Plugin Name: SVG Media Library Import
* Plugin URI: https://github.com/TRTCO/wordpress_svg-import
* Description: Simple plugin for SVG file import to the WordPress media library
* Version: 1.0
* Author: Jens Ratzel
* Author URI: https://profiles.wordpress.org/jensratzel
* License: GNU GPLv3
*/

function kb_svg ( $svg_mime ){
	$svg_mime['svg'] = 'image/svg+xml';
	return $svg_mime;
}

add_filter( 'upload_mimes', 'kb_svg' );
