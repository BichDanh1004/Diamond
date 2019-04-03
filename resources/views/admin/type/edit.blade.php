@extends('admin.layout')
@section('custom-container')
<h3>EDIT PAGE</h3>
 @if (count($errors)>0) 
    <div class="alert alert-success">
       @foreach($errors->all() as $err)
       {{$err}}<br>
       @endforeach
    </div>
@endif

@if(session('messages'))
<div class="alert alert-success">
{{session('messages')}}
@endif
  <form action="admin/type/edit/{{$type->id_product_type}}"  method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <!-- {{ csrf_field() }} -->
    <div class="form-group">
      <label for="name_product_type">Name product type:</label>
      <input type="text" class="form-control" placeholder="Name product type" name="name_product_type" value = "{{$type->name_product_type}}">
      @if ($errors->has('name_product_type'))
      <p class="text-danger">{{ $errors->first('name_product_type') }}</p>
      @endif
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <textarea rows="15" cols="100" name="description" class="ckeditor" id="description" value = "{{$type->description}}"></textarea>
           <p class="text-danger"></p>
    </div>

    
    <button type="submit" class="btn btn-primary">Cập nhập</button>
  </form>
@endsection