<?php

 interface iterator {

 public function rewind();
 public function next();
 public function key();
 public function current();
 public function valid();

 }