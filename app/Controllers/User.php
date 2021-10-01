<?php

namespace App\Controllers;
use App\Models\UserModel;

class User extends BaseController
{
	protected $user;
	protected $validation;
	protected $request;
    public function __construct()
    {
        helper(['form', 'url']);
        $this->validation =  \Config\Services::validation();
        $this->request = \Config\Services::request();
        $this->user = new UserModel();
    }
    public function index()
	{
		$array['allusers'] = $this->user->paginate(5,'group1');
		$array['pager'] = $this->user->pager;
        $array['total'] = count($array['allusers']);
        return view('user/index',$array);
	}
    public function new_user(){
        
        $data['first_name'] = [
            'name'      => 'first_name',
            'id'        => 'first_name',
            'value'     => set_value('first_name', ''),
            'class'     =>'form-control'
        ];
        $data['last_name'] = [
            'name'      => 'last_name',
            'id'        => 'last_name',
            'value'     => set_value('last_name', ''),
            'maxlength' => '100',
            'class'     =>'form-control'
        ];
        $data['email'] = [
            'name'      => 'email',
            'id'        => 'email',
            'value'     => set_value('email', ''),
            'maxlength' => '100',
            // 'size'      => '50',
            // 'style'     => 'width:50%',
            'class'     =>'form-control'
        ];
        $data['is_active'] = [
        'name' =>'is_active', 
        'id' => 'is_active'
    ]; 

        $data['error'] 	= $this->validator;
        // $uri = (string)$this->request->uri;
        // echo $uri;
        // var_dump($request->getRawInput());
//validation rules start
/*
$this->validation->setRules([
    'first_name' => 'required',
    'last_name' => 'required',
    'email' => 'required|min_length[10]',
    'is_active' => 'required|min_length[10]'
]);
*/
$error = $this->validate([
    'first_name'	=>	'required|min_length[3]',
    'last_name' => 'required',
    'email'	=>	'required|valid_email',    
]);

if(!$error)
{
    echo view('user/newuser', $data);
}
else
{
    // echo "everything ok!!";
    // var_dump($this->request->getRawInput());
    // exit;
    // echo $this->request->getPost('first_name');
    // $crudModel = new CrudModel();

    $this->user->save([
        'first_name'	=>	$this->request->getVar('first_name'),
        'last_name'	=>	$this->request->getVar('last_name'),
        'email'	=>	$this->request->getVar('email'),
        // 'create_date' => time(),
        'is_active'=>	$this->request->getVar('is_active')?'1':'0'
    ]);

    $session = \Config\Services::session();

    $session->setFlashdata('success', 'User '.$this->request->getVar('first_name').' Added');

    return $this->response->redirect('index');
}
//validation rules end
       
    }


    public function edit_user($id){
        $user = $this->user->find($id);
        //var_dump($userinfo);
        $data['id'] = $user['id'];
        $data['first_name'] = [
            'name'      => 'first_name',
            'id'        => 'first_name',
            'value'     => set_value('first_name', $user['first_name']),
            'class'     =>'form-control'
        ];
        $data['last_name'] = [
            'name'      => 'last_name',
            'id'        => 'last_name',
            'value'     => set_value('last_name', $user['last_name']),
            'maxlength' => '100',
            'class'     =>'form-control'
        ];
        $data['email'] = [
            'name'      => 'email',
            'id'        => 'email',
            'value'     => set_value('email', $user['email']),
            'maxlength' => '100',
            // 'size'      => '50',
            // 'style'     => 'width:50%',
            'class'     =>'form-control'
        ];
        $data['is_active'] = [
        'name' =>'is_active', 
        'id' => 'is_active',
        'value' => set_value('is_active',$user['is_active']),
        'checked'=>$user['is_active']?true:false
    ];

    if($this->request->getVar('id')){
    $error = $this->validate([
        'first_name'	=>	'required|min_length[3]',
        'last_name' => 'required',
        'email'	=>	'required|valid_email',    
    ]);
}
else{
    $error = false;
}
    
    if(!$error)
    {
        return view( 'user/edituser', $data);
    }
    else
    {
        echo "update user";
    }
}

public function update_user(){
    $this->user->update($this->request->getVar('id'),[
        'first_name'	=>	$this->request->getVar('first_name'),
        'last_name'	=>	$this->request->getVar('last_name'),
        'email'	=>	$this->request->getVar('email'),
        // 'create_date' => time(),
        'is_active'=>	$this->request->getVar('is_active')?'1':'0'
    ]);
    $session = \Config\Services::session();

    $session->setFlashdata('success', 'User '.$this->request->getVar('first_name').' Updated');

    return $this->response->redirect('index');
}
function delete_user($id)
    {
        
        // $this->user->where('id',$id)->delete($id);       
        $this->user->delete($id);       

        $session = \Config\Services::session();

        $session->setFlashdata('success', 'User with id:'.$id.' Deleted');

        return $this->response->redirect(site_url('/user'));
    }
    

}