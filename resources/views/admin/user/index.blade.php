@extends('admin.layout')
@section('custom-container')
<h3>QUẢN LÝ NGƯỜI DÙNG</h3>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone_number</th>
        <th>Address</th>
        <th>Role</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone_number}}</td>
        <td>{{$user->address}}</td> 
        <td>
       
          @foreach ($role as $ro)
            @if ($user->id_role== $ro->id_role)
            {{$ro->role_name}}
            @endif
          @endforeach
        
        </td>
        <td>
          <form action="admin/user/show/{{$user->id}}" method="GET">
          <button class="btn btn-info"><i class="fas fa-plus"></i></button>
          </form>
        </td>
        <td>

          <form action="admin/user/edit/{{$user->id}}" method="GET">
          <button class="btn btn-info" ><i class="fas fa-pen-alt"></i></button>
          </form>  
        </td>
        <td>
          <form action="admin/user/delete/{{$user->id}}" method="GET">
          <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
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