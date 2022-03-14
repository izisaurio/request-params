<?php

namespace RequestParams;

/**
 * Gets the params of a json body
 *
 * @access	public
 * @version	1
 */
class JsonBody extends ParamsCollection
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
		$this->data = \json_decode(\file_get_contents('php://input'), true);
	}

	/**
	 * Singleton instance
	 *
	 * @static
	 * @access	public
	 * @var		JsonBody
	 */
	public static $instance;
}
