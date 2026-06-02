<?php

namespace App\Controllers;

use App\Models\ProductModel; 

class Home extends BaseController
{

    protected $productModel;

    function __construct()
    {
        $this->productModel = new ProductModel();
        helper(['number', 'form']);
    }

    public function index(): string
    {
        return view('v_home', [
	        'products' => $this->productModel->findAll()
        ]);
    }
}