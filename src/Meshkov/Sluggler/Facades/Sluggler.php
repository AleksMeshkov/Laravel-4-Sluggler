<?php namespace Meshkov\Sluggler\Facades;

use Illuminate\Support\Facades\Facade;

/**
*
*/
class Sluggler extends Facade{

	/**
	* Get the registered name of the component.
	*
	* @return string
	*/

	protected static function getFacadeAccessor() { return 'sluggler'; }
}