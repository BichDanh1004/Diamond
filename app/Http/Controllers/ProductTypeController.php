<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;
use App\Http\Requests\ProductTypeRequest;

class ProductTypeController extends Controller
{

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id_pro_type = ProductType::all();
        return view('admin.type.index',['id_pro_type'=>$id_pro_type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/type/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductTypeRequest $request)
    {
        //
        $type = new ProductType;
        $type->name_product_type = $request->name_product_type;
        $type->description       = $request->description;
        $type->save();
        return redirect('admin/type/index')->with('messages','Them thanh cong');
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
    public function edit($id_product_type)
    {
        //
        $type = ProductType::find($id_product_type);
        return view('admin.type.edit',['type' => $type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id_product_type)
    {
        //
        $type = ProductType::find($id_product_type);
        $this->validate($request,
        [
             'name_product_type'=>'required|min:2|max:100'
        ],
        [
            'name_product_type.required'=>'Ban chua nhap ten the loai',
            'name_product_type.min'=>'Ten the loai phai co do dai tu 3 cho den 100 ky tu',
            'name_product_type.max'=>'Ten the loai phai co do dai tu 3 cho den 100 ky tu'
        ]
        );
        $type->name_product_type=$request->name_product_type;
        $type->description=$request->description;
        $type->save();

        return redirect('admin/type/index')->with('messages','Sua thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_product_type)
    {
        //
        $type = ProductType::destroy($id_product_type);
        return redirect('admin/type/index')->with('messages','Xoa thanh cong');
    }

    //  public function PostCreateType(Request $request) {
    //     $this->validate($request,
    //     [
    //         'Name_product_type'=>'required|min:3|max:100'
    //     ],
    //     [
    //         'Name_product_type.required'=>'Bạn chưa nhập tên thể loại',
    //         'Name_product_type.min'=>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự',
    //         'Name_product_type.max'=>'Tên thể loại phải có độ dài từ 3 đến 100 ký tự'
    //     ]);
    //     $producttype = new ProductType;  //lấy dữ liệu cái tên này lưu vào trong model
    //     $producttype->name_product_type->$request->name_product_type;
    //     return $request->name_product_type;
        
    //  }
  
}
