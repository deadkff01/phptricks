<?php

if(isset($_POST['action'])) {	
	$action = $_POST['action'];
	
	echo $action;
}else {
     echo 'command not found';
}