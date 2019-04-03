@extends('admin.layout')
@section('custom-container')
<h3>Quản lý hóa đơn</h3>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th>#</th>
        <th>Customer_name</th>
        <th>Date_order</th>
        <th>Total</th>
        <th colspan=4>Order_status</th>

        
       
      </tr>
    </thead>
    <tbody>
      
   
        
      <tr>
        <td>$bill->id_bill}}</td>
        
        <td>$customer->name}}</td>
        <td>$bill->created_at}}</td>
        <td>number_format</td> 
  
        <form action=" route('bills.update',$bill->id_bill) }}"  method="POST">
             <input type="hidden" name="_method" value="PUT">
             csrf_field() }}
             
        <td>
        <div class="form-group">
          <select name="status" class="custom-select mb-3 w-75">
           
              <option value="$status_bill->id_status}}" >
            
              </option>

          </select>
        </div>
        </td>
        <td>
            <button class="btn btn-secondary">+</button>
        </td>
             
        </form>
        <td>
            <form action=" route('bills.destroy',$bill->id_bill) }}" method="POST">
              <input type="hidden" name="_method" value="delete">
              <!-- {{ csrf_field() }} -->
              <button class="btn btn-danger">X</button></td>
            </form>  
        </td>
        <td>
            <a href="url('admin/bills/'.$bill->id_bill)}}">Chi tiết</a>
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