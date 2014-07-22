<?php
//echo 'sometest';
/*
if(isset($_GET['input'])) {	
	$string = $_GET['input'];
	echo strrev($string);
}
*/

if(isset($_POST['name'], $_POST['string'])) {	
	$name = $_POST['name'];
	$string = $_POST['string'];

	echo $name, ': says ', $string;
}