<?php

class Person {

	private static $name = '';

	public static function set_name($name) { 
		self::$name = $name;
	}
	
	public static function get_name() {
		echo self::$name;
	}
	
	public static function display_title( $title ) {
		echo '<h1>'. $title .'</h1>';
	}
}

?>
