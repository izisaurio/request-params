<?php

namespace RequestParams;

/**
 * Gets the params of a post type
 *
 * @access	public
 * @version	1
 */
class Post extends ParamsCollection
{
	/**
	 * Construct
	 *
	 * Initializes the collection
	 *
	 * @access	public
	 */
	public function __construct()
	{
		$this->data = $_POST;
	}

	/**
	 * Singleton instance
	 *
	 * @static
	 * @access	public
	 * @var		Post
	 */
	public static $instance;
}
