<?php

class Home extends Controller
{
	
	public function index($name = '')
	{
		//$this->model('User');
		$user = $this->model('User');
		$user->name = $name;
		//echo $user->name;
		$this->view('home/index', ['name' => $user->name]);
	}
/*
	public function test()
	{

		echo 'test ok!';
	}
*/
}
?>