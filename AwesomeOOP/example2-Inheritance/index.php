<?php

require_once('Employee.php');
require_once('Manager.php');



$mgr = new manager("Dennis", 300, 20);
$mgr->give_raise(50);

$emp = new employee("Someone");
$emp->give_raise(60);
