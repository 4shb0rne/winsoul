<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProductPage(){
        return view('pages/products/addproduct');
    }

    public function updateProductPage($id){
        $product = Product::find($id);
        return view('pages/products/updateproduct', ['product' => $product]);
    }

    public function addProduct(Request $request){
        $validate = $request->validate([
            'productname' => 'required',
            'productdescription' => 'required',
            'productprice' => 'required',
            'productimage' => 'required'
        ]);

        $file = $request->file('productimage');
        $originalname = $file->getClientOriginalName();
        $file->storeAs('public/assets/', $originalname);

        Product::create([
            'productname' => $validate['productname'],
            'productdescription' => $validate['productdescription'],
            'productprice' => $validate['productprice'],
            'productimage' =>$originalname
        ]);
        return redirect('/');
    }

    public function updateProduct(Request $request, $id){

    }

    public function productDetail($id){
        $product = Product::find($id);
        return view('pages/products/productdetail', ['product' => $product]);
    }

    public function loadHomePage(){
        $products = Product::latest('created_at')->paginate(10);
        return view('pages/home', ['data' => $products]);
    }
}
