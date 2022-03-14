<?php

namespace RequestParams;

/**
 * Gets the params of a apache headers
 *
 * @access	public
 * @version	1
 */
class ApacheHeaders extends ParamsCollection
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
		$this->data = \array_change_key_case(\apache_request_headers());
	}

	/**
	 * Singleton instance
	 *
	 * @static
	 * @access	public
	 * @var		ApacheHeaders
	 */
	public static $instance;
}
