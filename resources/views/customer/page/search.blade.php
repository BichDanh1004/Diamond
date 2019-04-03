@extends('customer.layout.master')
@section('content')
<div class="container ">
    <div class="text-header ">
        <h1>Tìm Kiếm:{{$keyword}}</h1>
        <h4>Tìm thấy {{count($product)}} sản phẩm</h4>
    </div>
    <div class="row ">
    @foreach( $product as $pro)
        <div class="col-3 ">
            <div class="card ">
            @foreach($img as $image)
            @if ($pro->id_product == $image->id_product)
                <img class="card-img-top " src="customer/images/{{$image->img_path}}" alt="Card image cap ">
            @endif
            @endforeach
                <div class="card-body ">
                    <p class="card-left ">{{$pro->product_name}}</p>
                    <p class="card-left ">{{$pro->price}} vnđ</p>
                    <a href="productdetail/{{$pro->id_product}}" class="btn btn-primary ">Xem Chi Tiết</a>
                    <a class="add-to-cart btn btn-primary  " href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection