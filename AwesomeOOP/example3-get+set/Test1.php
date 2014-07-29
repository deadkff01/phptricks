<?php

class test1 {

	protected $members = array();

	public function __get($arg) {
		if(array_key_exists($arg, $this->members)){
		return ($this->members[$arg]); 
			} else {
				return ("No such luck! <br />");
			}
	}


	public function __set($key, $val) {
		$this->members[$key] = $val;
	}

	public function __isset($arg) {
		return (isset($this->members[$arg]));
	}

}