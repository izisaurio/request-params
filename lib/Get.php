<?php

namespace RequestParams;

/**
 * Gets the params of a get type
 *
 * @author	izisuario
 * @version	1
 */
class Get extends ParamsCollection
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
		$this->data = $_GET;
	}

	/**
	 * Singleton instance
	 *
	 * @static
	 * @access	public
	 * @var		Get
	 */
	public static $instance;
}
