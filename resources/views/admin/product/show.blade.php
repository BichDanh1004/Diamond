@extends('admin.layout')
@section('custom-container')
<table class="table">
    <thead class="thead-light">
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>ProductType_Id</th>
        <th>Price</th>
        <th>Sold_quantity</th>
        <th>New</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
  
     
   
      <tr>
        <td>id_product</td>
        <td>name</td>
        <td>id_product_type</td>
        <td>price</td>
        <td>sold_quantity</td>
        <td>new</td>

        <td>
            <form action="" method="GET">
              <button class="btn btn-info"><i class="fas fa-info"></i></button>
              <button class="btn btn-info"><i class="fas fa-trash-alt"></i></button>
              <button class="btn btn-info"><i class="fas fa-pen-square"></i></i></button>
            </form>
        </td>
      </tr>
 
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