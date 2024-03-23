<?php

namespace JesGs\EloquentWp;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Model for wp_posts table
 */
class Post extends Eloquent {
	/**
	 * WordPress Posts table
	 *
	 * @var string
	 */
	protected $table = 'wp_posts';

	/**
	 * Attributes that are mass-assignable
	 *
	 * @var array
	 */
	protected $fillable = [
		'post_author',
		'post_date',
		'post_date_gmt',
		'post_content',
		'post_title',
		'post_excerpt',
		'post_status',
		'comment_status',
		'ping_status',
		'post_password',
		'post_name',
		'to_ping',
		'pinged',
		'post_modified',
		'post_modified_gmt',
		'post_content_filtered',
		'post_parent',
		'guid',
		'menu_order',
		'post_type',
		'post_mime_type',
		'comment_count',
	];
}
