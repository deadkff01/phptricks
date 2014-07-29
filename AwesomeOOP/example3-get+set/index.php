<?php

	require_once("Test1.php");
	require_once("Test2.php");
	require_once("Test3.php");
	require_once("Test3a.php");

	$x = new test1();
	
	print $x->speed_limit;
	
	$x->speed_limit = "65 MPH";
	if (isset($x->speed_limit)) {
		
		printf("Speed limit is set to %s<br />", $x->speed_limit);
	}
	$x->speed_limit = NULL;
	// verify if speed limit was modified
	if (empty($x->speed_limit)) {
		
		print "The method __isset() was called.<br />";

	} else {

		print "The __isset() method wasn't called.<br />";
}

printf("<br />");

	$y = new Test2();
	$y->non_existing_method(1, 2, 3);


	printf("<br />");

	$w = new test3("object 1");
	$z = new test3("object 2");
	print "Assignment taking place:<br />";
	$w = $z;
	print "End of the script <br />";

		printf("<br />");

	$w = new test3a("object 1");
	$w->get_copies();
	$z = new test3a("object 2");
	$w = clone $z;

	$w->get_copies();
	$z->get_copies();


	print "End of the script, executing destructors..<br />";