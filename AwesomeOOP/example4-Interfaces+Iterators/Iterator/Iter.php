<?php
class iter implements iterator {

	private $items;
	private $index;

	function __construct(array $items) {

		$this->items = $items;
	}

	function rewind() {
		$this->index = 0;
	}

	function current() {
	return ($this->items[$this->index]);

	}
	function key() {
		return($this->index);
	}

	function next() {
		$this->index++;
		if (isset($this->items[$this->index])) {
			return ($this->items[$this->index]);
		} else {
			return (NULL);
		}
	}

	function valid() {
		return (isset($this->items[$this->index]));

	}

}