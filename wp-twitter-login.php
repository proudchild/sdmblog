<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */




session_start();

define('WP_USE_THEMES', true);
$_SESSION["twitter_oauth_token"] = $_GET["oauth_token"];
$_SESSION["twitter_oauth_verifier"] = $_GET["oauth_verifier"];




if ( !isset($wp_did_header) ) {

	$wp_did_header = true;


	require_once( dirname(__FILE__) . '/wp-load.php' );



	wp();

	wingsGetTwitterStuff();

	require_once( ABSPATH . WPINC . '/template-loader.php' );

}







?>