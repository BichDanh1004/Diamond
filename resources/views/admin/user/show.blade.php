@extends('admin.layout')
@section('custom-container')
<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone_number</th>
        <th>Address</th>
        <th>Work_day</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>     
    @foreach($users as $user)
      <tr class="table-success">
        <td>{{$user->id_user }}</td>
        <td>{{$user->name }}</td>
        <td>{{$user->email }}</td>
        <td>{{$user->phone_number }}</td>
        <td>{{$user->address }}</td>
        <td>{{$user->created_at }}</td>
        <td>
            <form action="admin/user/index/{{$user->id_user}}" method="POST">
              <input type="hidden" name="_method" value="delete">
              <button class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
            </form>  
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection