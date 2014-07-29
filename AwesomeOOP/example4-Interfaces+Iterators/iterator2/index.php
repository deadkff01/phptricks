<?php

require_once("Filter_iter.php");

	$x = new file_iter("test.txt");

	foreach($x as $linenum => $val)
	 echo $linenum.':'. $val .'<br />'; 

	#futher tests.. using spl see more  www.php.net/manual/en/book.spl.php
	/*
	$x = new SplFileObject("qbf.txt","r");
foreach ($x as $lineno => $val) {
if (!empty($val)) {print "$lineno:\t$val"; }
}
?>
	*/
