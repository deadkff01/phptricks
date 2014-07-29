<?php
class manager extends employee {

	protected $dept;

	function __construct($name, $sal, $dept){
		parent::__construct($name, $sal);
		$this->dept = $dept;
	}

	function give_raise($amount) {
		parent::give_raise($amount);
		print "This employee is a manager <br/>";
	}

	function __destruct() {
	printf("Good bye, cruel world: MANAGER: %s <br>", $this->name);
	parent::__destruct();
	}


}