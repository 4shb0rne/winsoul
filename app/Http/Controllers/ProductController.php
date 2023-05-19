<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $validate = $request->validate([
            'productname' => 'required',
            'productdescription' => 'required',
            'productprice' => 'required'
        ]);

        $product = Product::find($id);
        if ($request->file('productimage')) {
            Storage::delete('/public/assets/'.$request->image);
            $file = $request->file('productimage');
            $originalname = $file->getClientOriginalName();
            $file->storeAs('public/assets/', $originalname);
        } else {
            $originalname = $product->productimage;
        }

        $product->update([
            'productname' => $validate['productname'],
            'productdescription' => $validate['productdescription'],
            'productprice' => $validate['productprice'],
            'productimage' => $originalname
        ]);

        return redirect('/');
    }

    public function productDetail($id){
        $product = Product::find($id);
        $reviews = Review::where('productid', $id)->get();
        return view('pages/products/productdetail', ['product' => $product, 'reviews' => $reviews]);
    }

    public function loadHomePage(){
        $products = Product::latest('created_at')->paginate(10);
        return view('pages/home', ['data' => $products]);
    }

    public function deleteProduct($id)
    {
        Product::find($id)->delete();
        return redirect('/');
    }

    public function searchProduct(Request $request)
    {

    }


}
