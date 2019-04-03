<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('admin/css/style-admin.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<!-- Font Awesome CSS -->
		<link href="{{asset('admin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />		
    <title>LOGIN ADMIN</title>
</head>
<body>
    <div class="container-fluid wrap">
        <div class="login-container">
            <div class="card sign-in w-40">
                <h4 class="text-center sign-in-title py-2">Sign In</h4>
                <div class="card-body">
                    <form action ="checklogin" method="post" class="sign-in-form">
                    {{ csrf_field() }}
                        <div class="input-container ">
                            <i class="fas fa-user icon mr-2"></i>
                            <input type="text" placeholder="User Name" name="email">
                        </div>
    
                        <div class="input-container">
                            <i class="fas fa-unlock-alt icon mr-2"></i>
                            <input type="password" placeholder="Password" name="password">
                        </div>
                        <div class="button-signin">
                            <button type="submit" class="btn btn-success w-50 my-2 btn-signin">Đăng nhập</button>
                        </div>
                        <a href="{{url('dang-ki')}}">Đăng ký</a>

                        @if (session('login_errors'))
                          <div class="alert alert-warning">
                             {{ session('login_errors') }}
                          </div>
                        @endif

                        @if (session('register'))
                          <div class="alert alert-success">
                             {{ session('register') }}
                          </div>
                        @endif

    
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

