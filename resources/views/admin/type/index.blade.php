@extends('admin.layout')
@section('custom-container')
@if (session('messages'))
    <div class="alert alert-success">
        {{ session('messages') }}
    </div>
@endif
<h3>Loại Sản Phẩm</h3>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th>#</th>
        <th class="w-10">Name product type</th>
        <th class="w-25">Description</th>
        <th class="width-10">Add</th>
        <th class="width-10">Edit</th>
        <th class="width-10">Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($id_pro_type as $type)
      <tr>
        <td>{{$type->id_product_type}}</td>
        <td>{{$type->name_product_type}}</td>
        <td>{!! $type->description !!}</td>

        <td>
          <form action="admin/type/create" method="GET">
          <button class="btn btn-info"><i class="fas fa-plus"></i></button>
          </form>
        </td>

        <td>
            <form action="admin/type/edit/{{$type->id_product_type}}" method="GET">
              <button class="btn btn-info" ><i class="fas fa-pen-alt"></i></button>
            </form> 
        </td> 

        <td>
            <form action="admin/type/delete/{{$type->id_product_type}}}}" method="GET">
              <input type="hidden" name="_method" value="delete">
              {{ csrf_field() }}
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