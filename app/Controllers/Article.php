<?php

namespace App\Controllers;
use App\Models\ArticleModel;

class Article extends BaseController
{
	private $article;
    public function __construct()
    {
        $this->article = new ArticleModel();
    }
    public function index()
	{
        //http://localhost/CI/userguide-4.1.3/docs/models/model.html
		$array['article'] = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
		$array['title'] = "English Alphabates";
        
        $array['allarticles'] = $this->article->findAll();

        return view("article/index",$array);
	}

    public function view($id){
        // echo "you want to view $id article";
        $arr['artdetails'] = $this->article->find($id);
        return view("article/single",$arr);
    }


}