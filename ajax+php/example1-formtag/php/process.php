<?php

if(isset($_POST['name'], $_POST['string'])) {	
	$name = $_POST['name'];
	$string = $_POST['string'];

	echo $name, ': says ', $string;
}else {
     echo 'error';
}