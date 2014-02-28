<?php

class Person {

	private static $name = '';

	public static function set_name($name) { 
		self::$name = $name;
	}
	
}

?>
