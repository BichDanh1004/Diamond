@extends('admin.layout')
@section('custom-container')
<h3>EDIT PAGE</h3>
@if (session('messages')) -->
    <div class="alert alert-success">
        {{ session('messages') }}
    </div>
<@endif
  <form action="admin/user/edit/{{$users->id}}"  method="POST" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Tên:</label>
      <input type="text" class="form-control" placeholder="Nhập tên" name="name" value="{{$users->name}}">
      @if ($errors->has('name'))
      <p class="text-danger">{{$errors->first('name')}}</p>
      @endif
    </div>

    <div class="form-group">
      <label for="phone_number">Số điện thoại:</label>
      <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="phone_number" value="{{$users->phone_number}}">
      @if ($errors->has('phone_number'))
      <p class="text-danger">{{$errors->first('phone_number') }}</p>
      @endif
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Nhập email" name="email" value="{{$users->email}}">
      @if ($errors->has('email'))
      <p class="text-danger">{{$errors->first('email') }}</p>
      @endif
    </div>

    <div class="form-group">
      <label for="password">Mật khẩu:</label>
      <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" name="password" value="{{$users->password}}">
      @if ($errors->has('password'))
      <p class="text-danger"> {{ $errors->first('password') }}</p>
      @endif
    </div>

    <div class="form-group">
      <label for="address">Địa chỉ:</label>
      <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="address" value="{{$users->address}}">
      @if ($errors->has('address'))
      <p class="text-danger">{{ $errors->first('address') }}</p>
      @endif
    </div>

    <div class="form-group">
      <label for="id_role">Role:</label>
      <select  class="form-control" name="id_role">
      @foreach($roles as $id_role)
        <option value="{{$id_role->id_role}}" @if($id_role->id_role == $users->id_role) {{'selected'}} @endif >
            {{$id_role->role_name}}
        </option>
      @endforeach
      </select>
    </div>


    <button type="submit" class="btn btn-primary">Cập nhập</button>
  </form>
@endsection