<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('test');
	}
	public function test(){
		return view('welcome_message');
	}
}
