<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\ProductType;
use App\Image;

class ProductController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id_product = Product::all();
        return view('admin.product.index',['id_product'=>$id_product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $type = ProductType::all();
        return view('admin.product.create', ['type'=> $type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        //
        $product = new Product;
        $types =  ProductType::all();
        $product->product_name    = $request->product_name;
        $product->price           = $request->price;
        $product->description     = $request->description;
        $product->sold_quantity   = $request->sold_quantity;
        $product->new             = $request->new;
        $product->id_product_type = $request->id_product_type;
        $product->save();
        return redirect('admin/product/index')->with('messages','Them thanh cong');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_product)
    {
        //
        $product = Product::find($id_product);
        $types =  ProductType::all();
        return view('admin.product.edit',['product' => $product,'types'=>$types]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id_product)
    {
        //
        $product = Product::find($id_product);
        $product->product_name=$request->product_name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->id_product_type=$request->id_product_type;
        $product->sold_quantity=$request->sold_quantity;
        $product->new=$request->new;
        $product->save();
        return redirect('admin/product/index')->with('messages','Sua thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function productdetail($id) {
        $product = Product::find($id);
        $image = Image::all();
        return  view('customer.page.productdetail',['product'=>$product,'image'=>$image]);
    }

    public function product() {
        return  view('customer.page.product');
    }
}
