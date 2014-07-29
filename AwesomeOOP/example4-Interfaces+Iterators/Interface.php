<?php

interface i1 {
	public function f1($a);
}

interface i2 extends i1 {
	public function f2($a);
}

class c1 implements i2 {
	private $memb;

	function __construct($memb) {
		$this->memb = $memb;
	}

	function f2($x) {
		echo 'Calling F2 on'. $this->memb . 'with arg'.$x."<br />";
	}

}
