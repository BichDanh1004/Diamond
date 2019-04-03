<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Diamond</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{asset('')}}"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('customer/css/style.css')}}">
</head>
<body>
    <section id="nv-h">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="nv-h-left">
                        <ul>
                            <li><a href="#" title="Doji.vn" target="_blank">Diamond.vn</a></li>
                            <li><a href="#" title="Tin tức">Tin tức</a></li>
                            <li><i class="fas fa-map-marker-alt"></i><a rel="" href="#">Hệ thống phân phối</a></li>
                            <li><i class="fas fa-phone-square"></i></i><a rel="" href="#">Hotline:<b>1800 1111</b></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="nv-h-right">
                        <ul>
                            <li>
                                <a rel="nofollow" href="register" title=" Đăng ký " class="pop-up-form register-sucssec ">Đăng ký</a></li>
                            <li>
                                <a rel="nofollow " href="login" title="Đăng nhập " class="pop-up-form ">Đăng nhập</a>
                            </li>
                            @if(Session::has('cart'))
                            <li>
                                <a rel="nofollow " id="top-cart-btn " href="cart" title=" "><i class="fas fa-cart-plus "></i></i>Giỏ hàng <span id="count_shopping_cart ">
                                (@if(Session::has('cart')) 
                                {{Session('cart')->totalQty}} 
                                @else
                                  Trống
                                 @endif)</span></a>
                            </li>
                          @endif

                        </ul>
                        <div id="search-main " style="display:inline-block">
                            <form id="f-search-main " method="get" action="search">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                                <input id="tim" type="text " name="keyword" placeholder="TÌM KIẾM ">
                                <button type="submit " id="btn"><span class="fa fa-search "></span></button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Menu -->

    <div class="container-fluid sticky sticky-top" id="sticky-header ">
        <div class="d-flex flex-row navbar ">
            <div class="col-lg-3 ">
                <div class="logo ">
                    <a href=" ">
                        <span>DIAMOND</span>
                    </a>
                </div>
            </div>

            <div class="col-lg-9 ">
                <div class="navbar-text ">
                    <nav class="navbar-expand-sm ">
                        <ul class="navbar-nav ">
                            <li>
                                <a href="{{route('home')}}" class="text-nav ">TRANG CHỦ</a>
                            </li>

                            <li>
                                <a href="./introduce.html " class="text-nav ">GIỚI THIỆU</a>
                            </li>

                            <li>
                                <a href="{{route('product')}}" class="text-nav ">NHẪN</a>
                            </li>
                            <li>
                                <a href="./bracelet.html " class="text-nav ">VÒNG TAY</a>
                            </li>
                            <li>
                                <a href="./necklace.html " class="text-nav ">DÂY CHUYỀN</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script src="customer/js/my.js "></script>
</body>

</html>