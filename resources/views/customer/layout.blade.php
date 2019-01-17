<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{asset('')}}"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('customer/style.css')}}">
</head>
<body>
    <div id="main">
        @include('customer.header')
       <div class="content-page">
       
           <!-- Start content -->
           <div class="content">
               
              
                @yield('custom-container')
                
    
           
               <!-- END container-fluid -->
    
           </div>
           <!-- END content -->
    
       </div>
       <!-- END content-page -->
       
       @include('customer.footer')
</body>
</html>