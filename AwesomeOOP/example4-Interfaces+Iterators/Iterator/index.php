<?php 

require_once("iter.php");

	$x = new iter(range('A', 'D'));

	foreach($x as $key => $val) {
		echo "key = $key  value= $val <br/>";
	}