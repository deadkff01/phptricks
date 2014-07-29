<?php

class test2 {
	
	//__call function is called when a non-existing method is called..
	
		function __call($name, $argv) {

			print "name: $name <br/ >";

			foreach ($argv as $a) {
				# code...
				print "\t $a <br/>";
			}
		}
}