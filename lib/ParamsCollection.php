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
	public static function instance()
	{
		if (!isset(static::$instance)) {
			static::$instance = new static();
		}
		return static::$instance;
	}

	/**
	 * Returns if the given key exists
	 *
	 * @static
	 * @access	public
	 * @param	string	$key		Collection key
	 * @return	bool
	 */
	public static function has($key)
	{
		return isset(self::instance()->data[$key]);
	}

	/**
	 * Returns the given key value or default
	 *
	 * @static
	 * @access	public
	 * @param	string	$key		Collection key
	 * @param	mixed	$default	Default value if none found
	 * @return	mixed
	 */
	public static function key($key, $default = null)
	{
		return isset(self::instance()->data[$key])
			? self::instance()->data[$key]
			: $default;
	}

	/**
	 * Returns all values
	 *
	 * @static
	 * @access	public
	 * @return	array
	 */
	public static function all()
	{
		return self::instance()->data;
	}
}
