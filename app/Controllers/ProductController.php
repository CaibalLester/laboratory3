<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    private $product;

    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
    }

    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('/product');
    }

    public function edit($id)
    {
        $data = [
        'product' => $this->product->findAll(),
        'pro' => $this->product->where('id', $id)->first(),
        ];
        return view('webproduct', $data);
    }

    public function save()
    {
        $id =$_POST['id'];
        $productData = [
            'pname' => $this->request->getVar('pname'),
            'pprice' => $this->request->getVar('pprice'),
            'pdescription' => $this->request->getVar('pdescription'),
            'pimage' => $this->request->getVar('pimage'),
        ];
            if($id!= null)
                {
                    $this->product->set($productData)->where('id', $id)->update();
                }
                else{
                    $this->product->insert($productData);
                }
                return redirect()->to('/product');
    }

    public function product($product)
    {
        echo $product;
    }

    public function CaibalLester()
    {
        $data['product'] = $this->product->findAll();
        return view('webproduct', $data);
    }

    public function index()
    {
        //
    }
}
