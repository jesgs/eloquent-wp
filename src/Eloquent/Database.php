<?php
// @phpcs:disable Universal.NamingConventions.NoReservedKeywordParameterNames

namespace JesGs\EloquentWp\Eloquent;

use Closure;
use Illuminate\Contracts\Database\Query\Expression;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\MultipleColumnsSelectedException;
use Illuminate\Database\Query\Builder;

/**
 * Database class
 */
class Database implements ConnectionInterface {


	/**
	 * WordPress database object
	 *
	 * @var \wpdb
	 */
	public $db;

	/**
	 * Database connection options
	 *
	 * @var array
	 */
	private $config;

	/**
	 * Database instance.
	 *
	 * @var Database
	 */
	private static $instance;

	/**
	 * Constructor method
	 */
	public function __construct() {
		global $wpdb;

		$this->config = [
			'name' => 'eloquent-wp',
		];

		$this->db = $wpdb;
	}


	/**
	 * Returns instance of class
	 *
	 * @return Database
	 */
	public static function get_instance(): Database {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Begin a fluent query against a database table.
	 *
	 * @param \Closure|Builder|string $table Table to use.
	 * @param string|null             $as Table alias.
	 *
	 * @return Builder
	 */
	#[\Override] public function table( $table, $as = null ) {
		// TODO: Implement table() method.
		return $table;
	}

	/**
	 * Get a new raw query expression.
	 *
	 * @param mixed $value
	 *
	 * @return Expression
	 */
	#[\Override] public function raw( $value ) {
		// TODO: Implement raw() method.
	}

	/**
	 * Run a select statement and return a single result.
	 *
	 * @param string $query
	 * @param array  $bindings
	 * @param bool   $useReadPdo
	 *
	 * @return mixed
	 */
	#[\Override] public function selectOne( $query, $bindings = [], $useReadPdo = true ) {
		// TODO: Implement selectOne() method.
	}

	/**
	 * Run a select statement and return the first column of the first row.
	 *
	 * @param string $query
	 * @param array  $bindings
	 * @param bool   $useReadPdo
	 *
	 * @return mixed
	 *
	 * @throws MultipleColumnsSelectedException
	 */
	#[\Override] public function scalar( $query, $bindings = [], $useReadPdo = true ) {
		// TODO: Implement scalar() method.
	}

	/**
	 * Run a select statement against the database.
	 *
	 * @param string $query
	 * @param array  $bindings
	 * @param bool   $useReadPdo
	 *
	 * @return array
	 */
	#[\Override] public function select( $query, $bindings = [], $useReadPdo = true ) {
		// TODO: Implement select() method.
	}

	/**
	 * Run a select statement against the database and returns a generator.
	 *
	 * @param string $query
	 * @param array  $bindings
	 * @param bool   $useReadPdo
	 *
	 * @return \Generator
	 */
	#[\Override] public function cursor( $query, $bindings = [], $useReadPdo = true ) {
		// TODO: Implement cursor() method.
	}

	/**
	 * Run an insert statement against the database.
	 *
	 * @param string $query
	 * @param array  $bindings
	 *
	 * @return bool
	 */
	#[\Override] public function insert( $query, $bindings = [] ) {
		// TODO: Implement insert() method.
	}

	/**
	 * Run an update statement against the database.
	 *
	 * @param string $query
	 * @param array  $bindings
	 *
	 * @return int
	 */
	#[\Override] public function update( $query, $bindings = [] ) {
		// TODO: Implement update() method.
	}

	/**
	 * Run a delete statement against the database.
	 *
	 * @param string $query
	 * @param array  $bindings
	 *
	 * @return int
	 */
	#[\Override] public function delete( $query, $bindings = [] ) {
		// TODO: Implement delete() method.
	}

	/**
	 * Execute an SQL statement and return the boolean result.
	 *
	 * @param string $query
	 * @param array  $bindings
	 *
	 * @return bool
	 */
	#[\Override] public function statement( $query, $bindings = [] ) {
		// TODO: Implement statement() method.
	}

	/**
	 * Run an SQL statement and get the number of rows affected.
	 *
	 * @param string $query
	 * @param array  $bindings
	 *
	 * @return int
	 */
	#[\Override] public function affectingStatement( $query, $bindings = [] ) {
		// TODO: Implement affectingStatement() method.
	}

	/**
	 * Run a raw, unprepared query against the PDO connection.
	 *
	 * @param string $query
	 *
	 * @return bool
	 */
	#[\Override] public function unprepared( $query ) {
		// TODO: Implement unprepared() method.
	}

	/**
	 * Prepare the query bindings for execution.
	 *
	 * @param array $bindings
	 *
	 * @return array
	 */
	#[\Override] public function prepareBindings( array $bindings ) {
		// TODO: Implement prepareBindings() method.
	}

	/**
	 * Execute a Closure within a transaction.
	 *
	 * @param \Closure $callback
	 * @param int      $attempts
	 *
	 * @return mixed
	 *
	 * @throws \Throwable
	 */
	#[\Override] public function transaction( Closure $callback, $attempts = 1 ) {
		// TODO: Implement transaction() method.
	}

	/**
	 * Start a new database transaction.
	 *
	 * @return void
	 */
	#[\Override] public function beginTransaction() {
		// TODO: Implement beginTransaction() method.
	}

	/**
	 * Commit the active database transaction.
	 *
	 * @return void
	 */
	#[\Override] public function commit() {
		// TODO: Implement commit() method.
	}

	/**
	 * Rollback the active database transaction.
	 *
	 * @return void
	 */
	#[\Override] public function rollBack() {
		// TODO: Implement rollBack() method.
	}

	/**
	 * Get the number of active transactions.
	 *
	 * @return int
	 */
	#[\Override] public function transactionLevel() {
		// TODO: Implement transactionLevel() method.
	}

	/**
	 * Execute the given callback in "dry run" mode.
	 *
	 * @param \Closure $callback
	 *
	 * @return array
	 */
	#[\Override] public function pretend( Closure $callback ) {
		// TODO: Implement pretend() method.
	}

	/**
	 * Get the name of the connected database.
	 *
	 * @return string
	 */
	#[\Override] public function getDatabaseName() {
		// TODO: Implement getDatabaseName() method.
	}
}
