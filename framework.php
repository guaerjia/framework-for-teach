<?php
/**
 * framework.php 
 * @author
 */
class FrontController {
	protected $_controller, $_action, $_params, $_body;
	static $_instance;

	public static function getInstance() {
		if ( !(self::$_instance instanceof self) ) {
			self::$_instance = new self();
		}
	}

	private function __construct() {
	
	}




}