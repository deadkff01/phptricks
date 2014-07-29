<?php
class NonNumericException extends Exception {
	private $value;
	private $msg = "Error: the value %s is not numeric! <br />";

	function __construct($value) {
		$this->value = $value;
	}
	public function info() {
		printf($this->msg, $this->value);
	}
}