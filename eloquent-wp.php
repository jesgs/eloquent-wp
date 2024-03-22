<?php
/**
 * Plugin Name:     Eloquent WP
 * Plugin URI:      https://www.jesgs.com/eloquent-wp
 * Description:     A wrapper for WPDB using Laravel Eloquent
 * Author:          Jess Green
 * Author URI:      https://www.jesgs.com
 * Text Domain:     eloquent-wp
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Eloquent_Wp
 */

$eloquent_wp_plugin_folder = plugin_basename( __DIR__ );

if ( ! defined( 'ELOQUENT_WP_VERSION' ) ) {
	define( 'ELOQUENT_WP_VERSION', '3.5.0' );
}

if ( ! defined( 'ELOQUENT_WP_FOLDER' ) ) {
	define( 'ELOQUENT_WP_FOLDER', $eloquent_wp_plugin_folder );
}

if ( ! defined( 'ELOQUENT_WP_ABSPATH' ) ) {
	define( 'ELOQUENT_WP_ABSPATH', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'ELOQUENT_WP_URLPATH' ) ) {
	define( 'ELOQUENT_WP_URLPATH', plugin_dir_url( __FILE__ ) );
}

require ELOQUENT_WP_ABSPATH . 'vendor/autoload.php';
