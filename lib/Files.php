<?php

namespace RequestParams;

use \Closure;

/**
 * Gets the params of a file type and implements easy access to upload it
 *
 * @access	public
 * @version	1
 */
class Files extends ParamsCollection
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
		$this->data = $_FILES;
	}

	/**
	 * Returns the given key as a collection or empty array
	 *
	 * @static
	 * @access	public
	 * @param	string	$key		Collection key
	 * @return	array
	 */
	public static function collection($key)
	{
		$files = self::instance()->data[$key];
		if (!$files || !\is_array($files)) {
			return [];
		}
		$items = [];
		if (isset($files['name'])) {
			if (\is_array($files['name'])) {
				foreach (\array_keys($files['name']) as $key) {
					if (empty($files['name'][$key])) {
						continue;
					}
					$items[] = [
						'name' => $files['name'][$key],
						'type' => $files['type'][$key],
						'tmp_name' => $files['tmp_name'][$key],
						'error' => $files['error'][$key],
						'size' => $files['size'][$key],
					];
				}
			} else {
				$items[] = $files;
			}
		}
		return $items;
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
