<?php

namespace App\Controllers;

use App\Libraries\HZip;
use App\Models\ArticleModel;

class Ch5 extends BaseController
{
	protected $ar;
	public $s;
	public $l;
	public function __construct()
	{
		helper(['form','url','filesystem']);
		$this->ar = new ArticleModel();
		$this->s =  \Config\Services::session();
		$this->l = \Config\Services::language();
		if(null != $this->s->get("userlang")){
			$this->l->setLocale($this->s->get("userlang"));	
		}
	}
	public function index()
	{
		//return view('test');
		$data['allarticles'] = $this->ar->where('status','1')->findAll();
		$data['inactivearticle'] = $this->ar->where('status','0')->findAll();
		return view("ch5/index",$data);
	}
	public function register(){
		$data['name'] = [
            'name'      => 'name',
            'id'        => 'name',
            'value'     => set_value('name', ''),
            'class'     =>'form-control',
			'placeholder'=>"Your Full Name"
        ];
		$data['email'] = [
            'name'      => 'email',
            'id'        => 'email',
            'value'     => set_value('email', ''),
            'class'     =>'form-control',
			'placeholder'=>"someone@example.com"
        ];
		$data['password'] = [
            'name'      => 'password',
            'id'        => 'password',
            'value'     => set_value('password', ''),
            'class'     =>'form-control',
			'placeholder'=>"password"
        ];
		$data['repassword'] = [
            'name'      => 'repassword',
            'id'        => 'repassword',
            'value'     => set_value('repassword', ''),
            'class'     =>'form-control',
			'placeholder'=>"retype password"
        ];
		$data['error'] 	= $this->validator;
		$error = $this->validate([
			'name'	=>	'required|min_length[3]',
			'email' => 'required|valid_email|is_unique[register.email]',
			'password'	=>	'required',    
			'repassword'	=>	'required|matches[password]'    
		]);
		if(!$error)
{
    echo view("ch5/formvalidation",$data);
	//echo view('user/newuser', $data);
}
else{

	echo "Insert ".$this->request->getPost("email")." value into database";
}
		
	}

	public function filesystem(){
		$data['allimages'] = directory_map(FCPATH.'assets\images');
		$data['fileinfo'] = get_dir_file_info(FCPATH.'assets\images', FALSE);
		// foreach ($data['allimages'] as $key => $value) {
		// 	echo $key;
		// }
		// dd($data['allimages']);
		return view("ch5/filesystem",$data);
	}
	public function writefile(){
		$data_to_write = 'This is text which will be written to the file ' . rand(1,500) . "\n";
		if ( ! write_file(FCPATH . 'article.txt', $data_to_write, "a"))
{
    echo 'Unable to write the file';
}
else
{
    echo 'File written!';
}
	}

	public function downloadzip(){
		echo "checking ZIP downlaod";
		HZip::zipDir(FCPATH."assets/images/banner",FCPATH."/images.ZIP");
if($this->dlzip(FCPATH."/images.ZIP","todaysimage.zip")) echo "zip created and downloaded";
else "cannot dl";

	}
	private function dlzip($source,$filename){
		header("Content-type: application/zip"); 
header("Content-Disposition: attachment; filename=$filename");
header("Content-length: " . filesize($source));
header("Pragma: no-cache"); 
header("Expires: 0"); 
return readfile($source);
	}
	public function fileupload(){
		//print_r(ONLYIMAGE);
		//die;
		$imagefile = $this->request->getFiles();
		//dd($imagefile);
		if(isset($imagefile['files'])){
		foreach($imagefile['files'] as $img)
   {
      if ($img->isValid() && !$img->hasMoved())
      {
        $type = $img->getClientMimeType();
		echo $img->getClientExtension() . " : Mime : " . $type. "<br>"; 		
		if(in_array($type,ONLYIMAGE)){
			//insert name into DB
			$newName = $img->getRandomName();
           	$img->move(WRITEPATH.'uploads', $newName);
		}
      }
   }
}
		return view('ch5/fileupload');
	}

	public function fileupload2(){
		$validation= $this->validate([
			'useremail' =>'required|valid_email|checkmail',
			'pimages'=>[
				'rules'=>'uploaded[pimages]|mime_in[pimages,image/jpg,image/jpeg,image/gif,image/png,image/webp]|max_size[pimages,4096]',
				"errors"=>[
					'mime_in'=>"Invalid Image File!!. Only jpg, jpeg, gif or png allowed!",
					'uploaded'=>"Image is required"
				]
			],
		]);
		if (!$validation){
			return view('ch5/fileupload2');
		}
		else{
			echo "validation ok!!!!";
		}
		//return view('ch5/fileupload2');
	}
	public function viewlang(){
		// $l = \Config\Services::language();
		$data['language'] = $this->s->get("userlang");
		// $data['language'] = $_SESSION["userlang"];
		return view("ch5/selectlang",$data);
	}
	public function setlang($lang){	
		//$_SESSION['userlang'] = $lang	
		$this->s->set("userlang",$lang);
		
		$this->l->setLocale($lang);
		//return view("ch5/selectlang");
		return redirect("lang");
	}

	public function ln1(){
		// $locale = $this->request->getLocale();
		// echo $l->getLocale();
		// exit;
		$this->setlang($this->s->get("userlang"));
		$data['allarticles'] = $this->ar->where('status','1')->findAll();
		$data['inactivearticle'] = $this->ar->where('status','0')->findAll();
		return view("ch5/ln1",$data);
	}

}