@extends('admin.layout')
@section('custom-container')

<div class="container">
<h3>CREATE PRODUCT</h3>
@if (session('message'))
    <div class="alert alert-success">
       {{ session('message') }}
    </div>
@endif
  <form action="admin/product/create"  method="POST">
 {{ csrf_field() }}

       <div class="form-group">
         <label for="product_name">Name Product:</label>
         <input type="text" class="form-control" placeholder="Enter name product" name="product_name">
        <!-- @if ($errors->has('product_name')) -->
           <p class="text-danger">{{$errors->first('product_name') }}</p>
        <!-- @endif -->
         </div>
       
     <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" class="form-control" placeholder="Enter price" name="price">
     <!-- @if ($errors->has('price')) -->
           <p class="text-danger">{{$errors->first('price') }}</p>
      <!-- @endif -->
    </div>

    <div class="mb-3 d-flex flex-column">
    <label for="id_product_type">ProductType:</label>
        <select class="form-control" name="id_product_type">
          @foreach($type as $tl)
            <option value="{{$tl->id_product_type}}">
              {{$tl->name_product_type}}
            </option>
          @endforeach
        </select>
                        
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <textarea rows="15" cols="100" name="description" class="ckeditor" id="description"></textarea>
     <!-- @if ($errors->has('description')) -->
           <p class="text-danger">{{$errors->first('description') }}</p>
     <!-- @endif -->
    </div>
    
    <div class="form-group">
      <label for="sold_quantity">Sold quantity:</label>
      <input type="number" min=0 class="form-control" placeholder="Enter sold quantity" name="sold_quantity">
     <!-- @if ($errors->has('price')) -->
           <p class="text-danger">{{$errors->first('price') }}</p>
      <!-- @endif -->
    </div>

    <div class="form-group">
      <label for="new">New:</label>
      <input type="number" min=0 class="form-control" placeholder="Enter new" name="new">
     <!-- @if ($errors->has('price')) -->
           <p class="text-danger">{{$errors->first('price') }}</p>
      <!-- @endif -->
    </div>

  <button type="submit" class="btn btn-primary">Create</button>
  </form>

  
</div>
@endsection