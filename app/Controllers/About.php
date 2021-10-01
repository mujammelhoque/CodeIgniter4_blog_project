<?php

namespace App\Controllers;

class About extends BaseController
{
// 	public function _remap($method)
// {
//     // echo "you are calling $method<hr>";
// 	if($method == "home" || $method == "index" ) $this->index();
// 	if($method == "abc") $this->teest();
// 	// else echo "not found";
// }
	
	public function index()
	{
	return view("about_us");	
	// echo site_url();
	// echo "http://".$_SERVER['HTTP_HOST'];
	}
	public function test3()
	{
	// return view("welcome_message");
	echo "teest3 called";
	}

	public function hw($message,$id = 55){
		echo "hello world!!! $message and id = $id";
	}

	private function test4()
	{
	// return view("welcome_message");
	echo "teest4 called";
	}



}