@extends('admin.layout')
@section('custom-container')
<h3>QUẢN LÝ SẢN PHẨM</h3>
@if (session('messages'))
    <div class="alert alert-success">
        {{ session('messages') }}
    </div>
@endif
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th>#</th>
        <th>Name_product</th>
        <th>ProductType_Id</th>
        <th>Price</th>
        <th>Sold_quantity</th>
        <th>New</th>
        <th>Add</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
    @foreach($id_product as $product)
      <tr>
        <td>{{$product->id_product}}</td>
        <td>{{$product->product_name}}</td>
        <td>{{$product->id_product_type}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->sold_quantity}}</td>
        <td>{{$product->new}}</td>
        <td>
          <form action="admin/product/create" method="GET">
          <button class="btn btn-info"><i class="fas fa-plus"></i></button>
          </form>
        </td>

        <td>
            <form action="admin/product/edit/{{$product->id_product}}" method="GET">
              <button class="btn btn-info" ><i class="fas fa-pen-alt"></i></button>
            </form> 
        </td> 
      </tr>
 @endforeach
    </tbody>
  </table>

<div class="d-flex flex-row">
  <div class="col-9"></div>
  <div class="col-3">
    <div class="d-flex justify-content-start">
     
    </div>
  </div>
</div>
@endsection