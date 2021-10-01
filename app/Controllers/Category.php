<?php

namespace App\Controllers;
use App\Models\CategoryModel;
class Category extends BaseController
{
	
    protected $category;
	protected $validation;
	protected $request;
    public function __construct()
    {
        helper('form');
        $this->category = new CategoryModel();
    }
    public function index()
	{
		// $array['allcat'] = $this->category->findAll();
		$array['allcat'] = $this->category->paginate('5','perpage2');
		$array['pager'] = $this->category->pager;
        $array['total'] = count($array['allcat']);
        return view('category/index',$array);
	}
    public function new(){ 
        // echo "new cat";
        $data['name'] = [
            'name'      => 'name',
            'id'        => 'name',
            'value'     => set_value('name', ''),
            'class'     =>'form-control'
        ];
        $data['details'] = [
            'name'      => 'details',
            'id'        => 'details',
            'value'     => set_value('details', ''),
            'maxlength' => '100',
            'class'     =>'form-control'
        ];
        $data['error'] 	= $this->validator;
        //validation riles
        $error = $this->validate([
            'name'	=>	'required|min_length[3]|alpha_numeric',
            'details' => 'required|min_length[10]|alpha_numeric_punct',            
        ]);
        if(!$error){
            echo view('category/new',$data);
        }
        else{
            //echo "everything ok, we can save the data";
            //echo $this->request->getPost('name');
            //echo $this->request->getPost('details');
            $data = [
                'name'=>$this->request->getPost('name'),
                'details'=>$this->request->getPost('details'),
            ];
            // if($this->category->save($data)){            
            if($this->category->insert($data)){            
    $session = \Config\Services::session();
    $session->setFlashdata('success', 'Category with id '.$this->category->getInsertID().' Added');
    return $this->response->redirect('index');
            }
        }


        
    }
    public function edit($id){ 
        $cat = $this->category->find($id);
        $data['id'] = $cat['id'];
        $data['name'] = [
            'name'      => 'name',
            'id'        => 'name',
            'value'     => set_value('name',$cat['name'] ),
            'class'     =>'form-control'
        ];
        $data['details'] = [
            'name'      => 'details',
            'id'        => 'details',
            'value'     => set_value('details', $cat['details']),
            'maxlength' => '100',
            'class'     =>'form-control'
        ];
        if($this->request->getVar('id')){
            $error = $this->validate([
                'name'	=>	'required|min_length[3]|alpha_numeric',
            'details' => 'required|min_length[10]|alpha_numeric_punct',    
            ]);
        }
        else{
            $error = false;
        }
            
            if(!$error)
            {
                return view( 'category/edit', $data);
            }
            else
            {
                echo "update user";
            }

    }
    public function update(){
        $this->category->update($this->request->getVar('id'),[
            'name'	=>	$this->request->getVar('name'),
            'details'	=>	$this->request->getVar('details'),
        ]);
        $session = \Config\Services::session();
    
        $session->setFlashdata('success', 'Category '.$this->request->getVar('name').' Updated');
    
        return $this->response->redirect('index');
    }
    public function delete($id){ 
        $this->category->delete($id);       

        $session = \Config\Services::session();

        $session->setFlashdata('success', 'Category with id:'.$id.' Deleted');

        return $this->response->redirect(site_url('/category'));
    }

}