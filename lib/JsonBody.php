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
		$data = \json_decode(\file_get_contents('php://input'), true);
		$this->data = $data ?? [];
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
