<?php
global $wpdb;

if ( ! defined( 'ELOQUENT_WP_ABSPATH' ) ) {
	define( 'ELOQUENT_WP_ABSPATH', plugin_dir_path( __FILE__ ) );
}

require ELOQUENT_WP_ABSPATH . 'vendor/autoload.php';

$dbuser     = defined( 'DB_USER' ) ? DB_USER : '';
$dbpassword = defined( 'DB_PASSWORD' ) ? DB_PASSWORD : '';
$dbname     = defined( 'DB_NAME' ) ? DB_NAME : '';
$dbhost     = defined( 'DB_HOST' ) ? DB_HOST : '';

use Illuminate\Database\Capsule\Manager as Capsule;
$eloquent_wp_capsule = new Capsule();
$eloquent_wp_capsule->addConnection(
	array(
		'driver'   => 'mysql',
		'host'     => DB_HOST,
		'database' => DB_NAME,
		'username' => DB_USER,
		'password' => DB_PASSWORD,
	)
);
$eloquent_wp_capsule->setAsGlobal();
$eloquent_wp_capsule->bootEloquent();

/**
 * Adapter class for wpdb to Eloquent
 */
class EloquentWP_DB_Adapter extends \wpdb {
	/**
	 * Constructor method for class
	 *
	 * @param string $dbuser Database user.
	 * @param string $dbpassword Database password.
	 * @param string $dbname Database name.
	 * @param string $dbhost Database host.
	 */
	public function __construct( $dbuser, $dbpassword, $dbname, $dbhost ) {
		parent::__construct( $dbuser, $dbpassword, $dbname, $dbhost );
	}
}

// @phpcs:disable
$wpdb = new EloquentWP_DB_Adapter( $dbuser, $dbpassword, $dbname, $dbhost );
// @phpcs:enable
