<?php

namespace RequestParams;

/**
 * Gets the params of php server
 *
 * @access	public
 * @version	1
 */
class Server extends ParamsCollection
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
		$this->data = $_SERVER;
	}

	/**
	 * Singleton instance
	 *
	 * @static
	 * @access	public
	 * @var		Server
	 */
	public static $instance;
}
