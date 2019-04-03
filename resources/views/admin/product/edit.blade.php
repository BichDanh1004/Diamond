@extends('admin.layout')
@section('custom-container')
@if (session('messages'))
    <div class="alert alert-success">
        {{ session('messages') }}
    </div>
@endif
<form action="admin/product/edit/{{$product->id_product}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    {{ csrf_field() }}

       <div class="form-group">
         <label for="product_name">Product name:</label>
         <input type="text" class="form-control" placeholder="Enter name product" name="product_name" value="{{$product->product_name}}">
         @if ($errors->has('product_name'))
           <p class="text-danger">{{ $errors->first('product_name') }}</p>
         @endif    
       </div>

     <div class="form-group">
      <label for="price">Giá:</label>
      <input type="number" min=0 class="form-control" placeholder="Enter price" name="price" value="{{$product->price}}">
      @if ($errors->has('price'))
           <p class="text-danger">{{ $errors->first('price') }}</p>
      @endif   
    </div>

    <div class="form-group">
      <label for="description">Giới thiệu ngắn:</label>
      <textarea rows="15" cols="100" name="description" class="ckeditor" id="description">{!! $product->description !!}</textarea>
      @if ($errors->has('description'))
           <p class="text-danger">{{ $errors->first('description') }}</p>
      @endif   
    </div>

    <div class="form-group">
      <label for="id_product_type">Product Type:</label>
      <select  class="form-control" name="id_product_type">
      @foreach($types as $id_product_type)
        <option value="{{$id_product_type->id_product_type}}" @if($id_product_type->id_product_type == $product->id_product_type) {{'selected'}} @endif >
            {{$id_product_type->name_product_type}}
        </option>
      @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="sold_quantity">Sold quantity :</label>
      <input type="number" class="form-control" placeholder="Enter sold quantity" name="sold_quantity" value="{{$product->sold_quantity}}">
      @if ($errors->has('sold_quantity'))
           <p class="text-danger">{{ $errors->first('sold_quantity') }}</p>
      @endif   
    </div>

    <div class="form-group">
      <label for="new">New :</label>
      <input type="number" min='0' max='1' class="form-control" placeholder="Enter new" name="new" value="{{$product->new}}">
      @if ($errors->has('new'))
           <p class="text-danger">{{ $errors->first('new') }}</p>
      @endif   
    </div>

    <button type="submit" class="btn btn-primary">Update</button>

  </form>

@endsection