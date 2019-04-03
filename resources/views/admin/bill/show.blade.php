@extends('admin.layout')
@section('custom-container')
<div class="container">         
  <table class="table table-bordered">
    <thead>
      <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
     
      </tr>
    </thead>
    <tbody>
    
      
      <tr>
           <td>
                
        
           </td>
           <td>number_format($product->price)}} VNĐ</td>
           <td>$product->pivot->quantity}}</td>
           <td>number_format($product->pivot->total)}} VNĐ</td>
          

    
      </tr>
     

      
    </tbody>
  </table>
 
  <p>Hình thức thanh toán :  $payment->payment_name}}</p>
  <p>Địa chỉ chuyển hàng : $bill->address}}</p>
  <p>Tổng tiền thanh toán : number_format($bill->total)}} VNĐ</p>
  
 
 
  <p>Nhân viên kiểm duyệt : $employee->name}}</p>
 
 
</div>

@endsection
