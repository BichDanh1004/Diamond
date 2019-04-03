@extends('admin.layout')
@section('custom-container')

<div class="container">
<h3>CREATE PAGE</h3>
@if (count($errors) > 0)
    <div class="alert alert-success">
    <ul>
       @foreach ($errors ->all() as $error)
         <li>{!! $error !!}</li>
         @endforeach
    </ul>
    </div>
@endif
  <form action="{!! route('admin.type.getcreatetype')!!}"  method="POST">
   <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
    <div class="form-group">
      <label for="name_product_type">Name Product Type:</label>
      <input type="text" class="form-control" placeholder="Tên dòng sản phẩm" name="name_product_type">
      <p class="text-danger"></p>
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <textarea rows="15" cols="100" name="description" class="ckeditor" id="description"></textarea>
           <p class="text-danger"></p>
    </div>
    
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>
@endsection


