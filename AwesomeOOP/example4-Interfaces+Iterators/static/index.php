<?php

	require_once("Test4.php");

	$x = new test4();

	echo 'X: '.$x->get_objcnt(). 'object was created <br />';

	$y = new test4();
	echo 'X: '.$y->get_objcnt(). 'object were created <br />';
	echo "Let's revisit the variables x: <br />" ;
	echo "When called as object property, PHP will invent a new member of X... <br />";
	echo "and initialize it to: ".$x->bad();
	echo "and initialize it to: ".$y->bad();