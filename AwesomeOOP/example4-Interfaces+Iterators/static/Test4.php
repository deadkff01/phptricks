<?php 

class test4 {
 
 public static $objcnt;

 function __construct() {
 	++self::$objcnt;
 }

 function get_objcnt() {
 	return (test4::$objcnt);
 }

 function bad() {
 	if(!isset($this->objcnt))
 	return ($this->objcnt = 0);
 	else 
		return ($this->objcnt);

 }


}