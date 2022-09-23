<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    //
    function index(){
        $data = Products::all();
        return view('products',['products'=>$data]);
    }
    function detail($id){
        $data = Products::find($id);
        return view('detail',['product'=>$data]);
    }
    function addToCart(Request $request){
        // if($req->session()->has('user')){
        //     return "Hello";
        // }else{
        //     return redirect('/login ');
        // 
        return $request->session()->get('user');
 
    }
}
