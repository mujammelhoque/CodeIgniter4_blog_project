<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
	public function home(){
		return view("home");
	}
	public function index(){
		
        return view("homepage");
    }
	public function threecol(){ 	return view("threecolumn");	}
	public function twocol1(){ 	return view("twocolumnone");	}
	public function twocol2(){ 	return view("twocolumntwo");	}
	public function onecol(){ 	return view("onecolumn");	}
    public function test1()
	{
		echo "test 1 called";
	}
	public function test2(){
		echo "test 2 called";
	}
    public function test3()
	{
		//echo "test 3 called";
        return view("welcome_message");
	}
	public function test4(){
		return view("about_us");
	}
}