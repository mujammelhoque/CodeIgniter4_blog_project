<?php

namespace App\Controllers;

use App\Libraries\Cart;
use App\Models\ProductModel;

class Shop extends BaseController
{
	public $cart;
    protected $product;
    public function __construct()
    {
        helper(['form','url']);
        $this->cart = Cart();
        $this->product = new ProductModel();
    }
    public function index()
	{
		
        $array['totalItems'] = $this->cart->totalItems();;
        $array['allproduct'] = $this->product->paginate('5','perpage2');
		$array['pager'] = $this->product->pager;
        
        return view("shop/index",$array);
         //echo "1 item inserted";
         //echo anchor('shop/index','View Items');
	}
    public function show(){
        echo $this->cart->totalItems();
    }
    public function add($id){
        $p = $this->product->find($id);
$this->cart->insert(array(

            'id'      => $p['product_id'],
         
            'qty'     => 1,
         
            'price'   => $p['product_price'],
         
            'name'    => $p['product_name'],
         
            'options' => array('Size' => 'L', 'Color' => 'Red')
         
         ));
         return redirect()->to('shop/index');
    }
    public function details(){
        // var_dump($this->cart->contents());
        // exit;
        $data['allitems'] = $this->cart->contents();
        return view("cart/details",$data);
    }
    public function empty(){
        echo $this->cart->destroy();
        return redirect()->to('shop/details');
    }

	
}