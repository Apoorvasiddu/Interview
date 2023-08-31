<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Products extends Controller
{
    public function  addproducts(Request $request){
        // dd($request->a?ll());
        $data = $request->all();
        \DB::table("products")->insert($data);

    }

    public function getproducts(){
        $data = \DB::table('Product')->get()->toarray();
        return view('welcome',[
            'data' =>$data
        ]);
    }
}
