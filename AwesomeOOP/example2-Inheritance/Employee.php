<?php
 class employee {
 	protected $name;
 	protected $sal;

 	function __construct($name, $sal = 100) {
 		$this->name = $name;
		$this->sal = $sal;
 	}

 	function give_raise($amount) {
 		$this->sal += $amount;
 		printf("Employee %s got raise of %d dollars<br />", $this->name, $amount);
 		printf("New salary is %d dollars <br />", $this->sal);
 	}

 	function __destruct() {
 		printf("Good bye, cruel world EMPLOYEE:%s <br />", $this->name);
 	}

 }