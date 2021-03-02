<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return 'about us';
    }

    public function show($name){
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung'
        ];
        return view('products.index',[
            'products' =>$data[$name] ?? 'Product '.$name.' does not exist'
        ]);
    }
}
