<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    //******FRONTEND ******/
    
    public function product_frontend_index(){
    
        $product = Product::paginate(5);
        return view('frontend.product.index', [ 'products' => $product ]);
    }
    public function product_frontend_detail($id){

        $product = Product::where('id', $id)->first();
        return view('frontend.product.detail', [ 'product' => $product ]);
    }

    //******BACKEND ******/

    public function create_form(){

        return view('backend.product.create');
    }
    public function update_form($id){

        $product = Product::where('id', $id)->first();
        return view('backend.product.update', [ 'product' =>$product ]);
    }

    //******CRUD and DETAIL ******/

    public function create(Request $request){

        $file = $request->file('image');
        $extension = $file -> getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $file->move('uploads/product', $fileName);

        $product = new Product([
            'title' => $request->get('title'),
            'price' => $request->get('price'),
            'description' => $request->get('description'),
            'image' => $fileName,
        ]);

        $product->save();
        return redirect('/admin/product');
    }

    public function index(){
        $product = Product::paginate(5);
        return view('backend.product.index', [ 'products' => $product ]);
    }

    public function update(Request $request){

        $product = Product::All()->where('id', $request->get('id'))->first();

        if( $request->image ){
            $file = $request->file('image');
            $extension = $file -> getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/product', $fileName);
            $product->image = $fileName;
        }
        
        $product->title = $request->get('title');
        $product->price = $request->get('price');
        $product->description = $request->get('description');

        $product->save();

        return redirect('/admin/product');
    }

    public function delete($id){
        
        Product::Where('id', $id)->first()->delete($id);
        return redirect('admin/product');
    }

    public function detail($id){

        $product = Product::where('id', $id)->first();
        return view('backend.product.detail', [ 'product' => $product ]);
    }
}
