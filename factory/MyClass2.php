<?php


class MyClass2 {
	
	
	public function __construct() {
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}
	
	public function __destruct() {
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}
}//end class

