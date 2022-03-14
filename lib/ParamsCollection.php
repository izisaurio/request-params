<?php

namespace RequestParams;

/**
 * Base class for request params type
 *
 * @author	izisaurio
 * @version	1
 */
class ParamsCollection
{
	/**
	 * Collection of values
	 *
	 * @access	protected
	 * @var		array
	 */
	protected $data = [];

	/**
	 * Returns the single instance
	 *
	 * @static
	 * @access	public
	 * @return	ParamsCollection
	 */
	public static function params()
	{
		if (!isset(static::$instance)) {
			static::$instance = new static();
		}
		return static::$instance;
	}

	/**
	 * Returns if the given key exists
	 *
	 * @access	public
	 * @param	string	$key		Collection key
	 * @return	bool
	 */
	public function has($key)
	{
		return isset($this->data[$key]);
	}

	/**
	 * Returns the given key value or default
	 *
	 * @access	public
	 * @param	string	$key		Collection key
	 * @param	mixed	$default	Default value if none found
	 * @return	mixed
	 */
	public function key($key, $default = null)
	{
		return isset($this->data[$key]) ? $this->data[$key] : $default;
	}

	/**
	 * Returns data as debug info
	 *
	 * @access	public
	 * @return	array
	 */
	public function __debugInfo()
	{
		return $this->data;
	}
}
