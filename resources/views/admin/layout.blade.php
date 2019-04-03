<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>ADMIN DIAMOND</title>
		<base href="{{asset('')}}">
		<!-- Bootstrap CSS -->
		<link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<!-- Font Awesome CSS -->
		<link href="{{asset('admin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />		
		<!-- Custom CSS -->
		<link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{asset('admin/css/style-admin.css')}}">
		<!-- BEGIN CSS for this page -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
		<!-- END CSS for this page -->
		<script src="{!!asset('ckeditor/ckeditor.js') !!}"></script>		
		
</head>

<body class="adminbody">
<div id="main">
     @include('admin.header')
     @include('admin.left-slide-bar')
    <div class="content-page">
		<!-- Start content -->
        <div class="content">           
			<div class="container-fluid">					
                @yield('custom-container')
            </div>
			<!-- END container-fluid -->
		</div>
		<!-- END content -->
    </div>
	<!-- END content-page -->
    
	@include('admin.footer')

</div>




<!-- END main -->

<script src="{{asset('admin/js/modernizr.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/moment.min.js')}}"></script>
		
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

<script src="{{asset('admin/js/detect.js')}}"></script>
<script src="{{asset('admin/js/fastclick.js')}}"></script>
<script src="{{asset('admin/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('admin/js/jquery.nicescroll.js')}}"></script>

<!-- App js -->
<script src="{{asset('admin/js/pikeadmin.js')}}"></script>

<!-- BEGIN Java Script for this page -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

	<!-- Counter-Up-->
	<script src="{{asset('admin/plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('admin/plugins/counterup/jquery.counterup.min.js')}}"></script>			

 


</body>
</html>