<?php


class MyClass extends Factory{

	public static function factory() {
		print __METHOD__ . '::' . __LINE__ . '<br />';
		return new MyClass();
	}
	
	protected function __construct() {
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}
	
	public function __destruct() {
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}
}//end class

