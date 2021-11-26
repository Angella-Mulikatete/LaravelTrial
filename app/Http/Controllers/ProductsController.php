<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title ='Welcome Angellina';
        $course ='Engineering';
        $data=[
            'name1'=> 'MULIKATETE',
            'name2'=>'ANGELLINA'
        ];
        //ways of passsing data to views- compact and with methods
       
        // return view('index', compact('title', 'course'));
       //with method
        //return view('index')->with('title', $title);
    //return view('index')->with('data', $data);    
    }
    //associative
    // return view('index', ['data' =>$data]);

    public function show($name){
        $data =[
            'iphone'=>'iphone',
            'samsung'=> 'samsung'
        ];
              return view('index', [
                  'products' =>$data [$name]?? 'Product'. $name. 'doesnot exist'
              ]);
    }
}
