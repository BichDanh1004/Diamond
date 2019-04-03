@extends('admin.layout')
@section('custom-container')
<div class="container">
<h3>CREATE PAGE</h3>
@if (session('message'))
    <div class="alert alert-success">
       {{ session('message') }}
    </div>
@endif
  <form action="admin/user/create"  method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" placeholder="Nhập tên" name="name">
      @if ($errors->has('name'))
      <p class="text-danger">{{$errors->first('name') }}</p>
      @endif
    </div>

    <div class="form-group">
      <label for="phone_number">Phone_number:</label>
      <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="phone_number">
      @if ($errors->has('phone_number'))
      <p class="text-danger">{{$errors->first('phone_number') }}</p>
      @endif
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Nhập email" name="email">
      @if ($errors->has('email'))
      <p class="text-danger">{{$errors->first('email') }}</p>
      @endif
    
  </div>

    <div class="form-group">
      <label for="password">Mật khẩu:</label>
      <input type="password" class="form-control"  placeholder="Nhập mật khẩu" name="password">
      @if ($errors->has('password'))
      <p class="text-danger"> {{$errors->first('password') }}</p>
      @endif
    </div>

    <div class="form-group">
      <label for="address">Địa chỉ:</label>
      <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="address">
      @if ($errors->has('address'))
      <p class="text-danger">{{$errors->first('address') }}</p>
      @endif
    </div>

     @if (session('message_errors'))
           <div class="alert alert-danger">
            {{ session('message_errors') }}
           </div>
        @endif
    
    <button type="submit" class="btn btn-primary">Tạo mới</button>
  </form>
 
</div>
@endsection

