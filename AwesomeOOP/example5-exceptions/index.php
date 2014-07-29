<?php
require_once('NonNumericExc.php');


try {
	$a = 'MYLI';
	if(!is_numeric($a[1])) {
		throw new NonNumericException ($a[1]);
	}
	if(!is_numeric($a[2])) {
		throw new NonNumericException ($a[2]);
	}
	if($a[2] == 0){
		throw new Exception ("Illegal division by zero. <br />");
	}
	printf("Result: %f\n", $a[1] + $a[2]);

	}catch(NonNumericException $exc) {
		$exc->info();
		exit(-1);
	}
	catch(Exception $exc) {
		echo 'Exception: <br />';
		$code = $exc->getCode();
		if(!empty($code)){
			echo "Error code: ".$code;
		}
		echo $exc->getMessage(). "<br />";
		exit(-1);
	}
	echo "Variable a=".$a."<br />";