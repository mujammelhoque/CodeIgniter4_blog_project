<?php

namespace App\Controllers;
use App\Models\ArticleModel;

class Datatable extends BaseController
{
	protected $disallowed = ['darn', 'shucks', 'golly', 'phooey','Bangladesh'];
	public function __construct()
	{
		helper(['text']);
	}
	public function index()
	{
		$article = new ArticleModel();
		$data['allarticles'] = $article->findAll();
		$data['cen'] = $this->disallowed;
		return view('datatable/index',$data);
	}
	public function testtexthelper(){
		echo $rn = random_string('alpha',20);
		echo "<br>";
		echo increment_string($rn,"_",5);
		echo "<br>";
		for ($i = 0; $i < 10; $i++)
		{
			echo alternator('one', 'two', 'three', 'four', 'five');
		}
	}

}