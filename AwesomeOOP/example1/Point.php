<?php

class Point{
	public $x;
	public $y;

	function __construct($x, $y) {
		$this->x = $x;
		$this->y = $y;
	}
	function get_x() {
		return ($this->x);
	}
	function get_y() {
		return ($this->y);
	}

	function dist($p) {
		return (sqrt( pow($this->x-$p->get_x(), 2) +
		 			  pow($this->y-$p->get_y(), 2) 
		 ));
	}

}