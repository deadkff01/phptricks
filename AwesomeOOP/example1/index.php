<?php

require_once('Point.php');

	$p1 = new Point(2, 3);
	$p2 = new Point(3, 4);

	echo $p1->dist($p2), " <br />";
	$p2->x = 5;
	echo $p1->dist($p2);