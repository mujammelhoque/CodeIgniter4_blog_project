<?php

namespace App\Controllers;

class Myemail extends BaseController
{
	protected $email;
    public function __construct()
    {
        helper(['form','url']);
        $this->email = \Config\Services::email();
    }
    public function index()
	{
		return view('email/index');
	}
    public function sendmail(){
        $fullname = $this->request->getPost("firstname") . " ". $this->request->getPost("lastname");
        $country = $this->request->getVar("country");

        $this->email->setFrom('mamun@idbproject.com', 'ASA AL-Mamun');
        $this->email->setTo('someone@example.com');
        $this->email->setCC('another@another-example.com');
        $this->email->setBCC('them@their-example.com');
        $this->email->setSubject('Email Test');
        $this->email->setMessage('Testing the email class.');
        $this->email->send();
    }
	
}