<?php

	class test3 {

		protected $memb;

		function __construct($memb) {
			$this->memb = $memb;
		}

		function __destruct() {
			printf ("Destroying onject %s.<br />", $this->memb);
		}


	}