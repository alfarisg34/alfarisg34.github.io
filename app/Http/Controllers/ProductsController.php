<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        // $title='welcome to laravel';
        // $description='created by alfi';
        
        // $data = [
        //     'productOne' => 'iPhone',
        //     'productTwo' => 'Samsung'
        // ];

        //compact method
        // return view('products.index',
        // compact('title','description'));

        //with method
        // return view('products.index')->with('title',$title);
        // return view('products.index')->with('data',$data);

        //Directly in the view
        print_r(route('products'));
        return view('products.index');
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
