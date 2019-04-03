@extends('admin.layout')
@section('custom-container')
<div class="container">
<h3>CREATE PAGE</h3>
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

  <div class="d-flex flex-md-row">
   <div class="col-md-9">
   <form action="{{route('images.store',$product->id_product)}}"  method="POST" enctype="multipart/form-data" >
  {{ csrf_field() }}
  <div class="form-group">
      <label for="name">Tên sản phẩm:</label>
      <input type="text" class="form-control" placeholder="Nhập tên" name="name" value = "{{$product->product_name}}" disabled>
  </div>

  <div class="form-group">
      <label for="images">Hình ảnh</label>
      <input type="file" class="form-control" name="images[]" multiple  >
      
  </div>
  @if (session('message_errors'))
       <div class="alert alert-danger">
          {{ session('message_errors') }}
       </div>
  @endif

  @if ($errors->has('images'))
      <div class="alert alert-danger">{{ $errors->first('images') }}</div>
  @endif  
    <button type="submit" class="btn btn-primary"  @if($images->count() >= 2 ) {{'disabled'}} @endif >Tạo mới</button>
  </form>
   </div>
   <div class="col-md-3">
     <ul class="list-unstyled list-images">
      @foreach($images as $image)
       <li class="mb-4">
         <span class="delete">
           <form action="{{ route('images.destroy', $image->id_image ) }}" method="POST">
              <input type="hidden" name="_method" value="delete">
              {{ csrf_field() }}  
              <button class="btn">Xóa</button>
             
           </form>
        </span>
         <a href="#"><img src="{{asset('storage/products/'.$image->img_path) }}"  class="product_image" alt="product-image"></a>
       </li>
      @endforeach 
       
     </ul>
    </div> 
   </div>  
  
    

  
</div>



@endsection


