@extends('customer.layout.master')
@section('content')
 <!-- Carousel -->

 <div class="container-fluid " id="home ">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators ">
            <li data-target="#carouselExampleIndicators " data-slide-to="0 " class="active "></li>

            <li data-target="#carouselExampleIndicators" data-slide-to="1 "></li>

            <li data-target="#carouselExampleIndicators" data-slide-to="2 "></li>
        </ul>

        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img src="{{asset('./customer/images/slide3.jpg')}}" class="img-slide " alt="Slide1 ">
            </div>

            <div class="carousel-item ">
                <img src="{{asset('./customer/images/slide4.jpg')}}" class="img-slide " alt="Slide2 ">
            </div>

            <div class="carousel-item ">
                <img src="{{asset('./customer/images/slide1.jpg')}}" class="img-slide " alt="Slide3 ">
            </div>
        </div>

        <a class="carousel-control-prev " href="#carouselExampleIndicators" data-slide="prev ">
            <span class="carousel-control-prev-icon "></span>
        </a>

        <a class="carousel-control-next " href="#carouselExampleIndicators" data-slide="next ">
            <span class="carousel-control-next-icon "></span>
        </a>
    </div>
</div>
<!--Card-->
<div class="container ">
    <div class="text-header ">
        <h1>SẢN PHẨM</h1>
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
                    <p class="card-left ">{{number_format($pro->price)}} vnđ</p>
                    <a href="productdetail/{{$pro->id_product}}" class="btn btn-primary ">Xem Chi Tiết</a>
                    <a class="add-to-cart btn btn-primary  " href="{{route('themgiohang',$pro->id_product)}}"><i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<!-- Features -->

<div class="container " id="features ">
    <div class="feature-header ">
        <h1>Giá Trị Nổi Bật</h1>
    </div>
    <div class="d-flex flex-row feature-content ">
        <div class="col-3 ">
            <div class="circle-feature mx-auto ">
                <div class="icon-layer "><img src="https://media.precita.vn/wysiwyg/icon/chung_nhan_icon_final.png " alt=" "></div>
            </div>

            <div class="text-detail ">
                <h5 class="text-center ">ĐẠT CHUẨN</h5>

                <p class="mx-auto ">
                    Đủ chứng nhận chất lượng
                </p>
            </div>
        </div>

        <div class="col-3 ">
            <div class="circle-feature mx-auto ">
                <div class="icon-layer "><img src="https://media.precita.vn/wysiwyg/icon/chat_luong_icon_final.png " alt=" "></div>
            </div>

            <div class="text-detail ">
                <h5 class="text-center ">CHẤT LƯỢNG</h5>

                <p class="mx-auto ">
                    Đúng trọng lượng và hàm lượng
                </p>
            </div>
        </div>

        <div class="col-3 ">
            <div class="circle-feature mx-auto ">
                <div class="icon-layer "><img src="https://media.precita.vn/wysiwyg/icon/thu_doi_cao_icon_final.png " alt=" "></div>
            </div>

            <div class="text-detail ">
                <h5 class="text-center ">CAM KẾT</h5>

                <p class="mx-auto ">
                    Thu mua đổi trọn đời
                </p>
            </div>
        </div>

        <div class="col-3 ">
            <div class="circle-feature mx-auto ">
                <div class="icon-layer "><img src="https://media.precita.vn/wysiwyg/icon/bao_hanh_vuot_troi_icon_final.png " alt=" "></div>
            </div>

            <div class="text-detail ">
                <h5 class="text-center ">MIỄN PHÍ</h5>

                <p class="mx-auto ">
                    Làm sạch trọn đời
                </p>
            </div>
        </div>
    </div>
</div>




<!--DESIGNER-->
<div class="container-fluid border-bottom " id="home ">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators ">
            <li data-target="#carouselExampleIndicators " data-slide-to="0 " class="active "></li>

            <li data-target="#carouselExampleIndicators" data-slide-to="1 "></li>

            <li data-target="#carouselExampleIndicators" data-slide-to="2 "></li>
        </ul>

        <div class="carousel-inner background my-5 ">
            <div class="title-design ">
                <h1 class="t-title ">Jon Martin</h1>
            </div>
            <div class="carousel-item active main-design ">
                <div class="row item ">
                    <div class="col-5 ">
                        <img src="{{asset('./customer/images/design-1.png')}} " alt=" " class="img-design ">
                    </div>
                    <div class="col-7 ">
                        <p>
                            Thời trang luôn luôn là tạm thời và không chắc chắn. Bạn không thể theo kịp nó. Hiện tượng xã hội này rất hay thay đổi, do đó chúng tôi là những người tiêu dùng luôn cố gắng giữ liên lạc với tất cả các xu hướng thời trang mới nhất. Rõ ràng không có gì
                            sai về nó bởi vì thời trang thỏa mãn sự sẵn sàng của chúng ta để trở nên hấp dẫn. Và thời trang cũng là nguồn gốc của sự thịnh vượng và thứ hạng xã hội.
                        </p>
                        <h5>John Doe</h5>
                        <h6>from some company</h6>
                    </div>
                </div>
            </div>
            <div class="carousel-item main-design ">
                <div class="row item ">
                    <div class="col-5 ">
                        <img src="{{asset('./customer/images/design-2.png')}} " alt=" " class="img-design ">
                    </div>
                    <div class="col-7 ">
                        <p>
                            Thời trang luôn luôn là tạm thời và không chắc chắn. Bạn không thể theo kịp nó. Hiện tượng xã hội này rất hay thay đổi, do đó chúng tôi là những người tiêu dùng luôn cố gắng giữ liên lạc với tất cả các xu hướng thời trang mới nhất. Rõ ràng không có gì
                            sai về nó bởi vì thời trang thỏa mãn sự sẵn sàng của chúng ta để trở nên hấp dẫn. Và thời trang cũng là nguồn gốc của sự thịnh vượng và thứ hạng xã hội.
                        </p>
                        <h5>John Doe</h5>
                        <h6>from some company</h6>
                    </div>
                </div>
            </div>
    </div>

     
    </div>
</div>


<!--Gallery-->


<div class="container" id="gallery ">
    <div class="gallery-header ">
        <h1>Bộ Sưu Tập</h1>
    </div>

    <div class="d-flex flex-row gallery-content ">
        <div class="col-3 ">
            <div class="box-gallery ">
                <div class="overlay ">
                    <div>
                        <img src="{{asset('./customer/images/bst1.jpg ')}}" alt=" " class="box-gallery-img ">
                    </div>

                    <div class="box-gallery-text ">
                        <p>SCREEN SHOT#3</p>
                    </div>
                </div>

                <div class="middle ">+</div>
            </div>
        </div>

        <div class="col-3 ">
            <div class="box-gallery ">
                <div class="overlay ">
                    <div>
                        <img src="{{asset('./customer/images/bst2.jpg ')}}" alt=" " class="box-gallery-img ">
                    </div>

                    <div class="box-gallery-text ">
                        <p>SCREEN SHOT#3</p>
                    </div>
                </div>

                <div class="middle ">+</div>
            </div>
        </div>

        <div class="col-3 ">
            <div class="box-gallery ">
                <div class="overlay ">
                    <div>
                        <img src="{{asset('./customer/images/trangsuc4.jpg ')}}" alt=" " class="box-gallery-img ">
                    </div>

                    <div class="box-gallery-text ">
                        <p>SCREEN SHOT#3</p>
                    </div>
                </div>

                <div class="middle ">+</div>
            </div>
        </div>

        <div class="col-3 ">
            <div class="box-gallery ">
                <div class="overlay ">
                    <div>
                        <img src="{{asset('./customer/images/trangsuc5.png ')}}" alt=" " class="box-gallery-img ">
                    </div>

                    <div class="box-gallery-text ">
                        <p>SCREEN SHOT#3</p>
                    </div>
                </div>

                <div class="middle ">+</div>
            </div>
        </div>
    </div>
</div>



@endsection