<?php
#Demonstrating deep copy..
class test3a {
	protected $memb;
	protected $copies;

	function __construct($memb, $copies = 0) {
		$this->memb = $memb;
		$this->copies = $copies;

	}

	function __destruct() {
		printf("Destroying object %s... <br />", $this->memb);

	}

	function __clone() {
		$this->memb.= ":CLONE";
		$this->copies++;
	}

	function get_copies() {
		printf("Object %s has %d copies. <br />", $this->memb, $this->copies);
	}
}