@extends('customer.layout.master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng kí</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">		
			<form action="checkregister" method="post" class="beta-form-checkout">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			@if(Session('thongbao'))
						<div class="alert alert-success">{{Session('thongbao')}}</div>
					@endif
				<div class="row">
					<div class="col-sm-3"></div>
					@if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
							{{$err}}
							@endforeach
						</div>
					@endif
					<div class="col-sm-6">
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>

						<div class="form-block">
							<label for="your_last_name">Fullname*</label>
							<input type="text" name="name" required>
						</div>
						
						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="email" name="email" required>
						</div>


						<div class="form-block">
							<label for="adress">Address*</label>
							<input type="text" name="address"  required>
						</div>


						<div class="form-block">
							<label for="phone">Phone*</label>
							<input type="text" name="phone_number" required>
						</div>
						<div class="form-block">
							<label for="phone">Password*</label>
							<input type="password" name="password" required>
						</div>
						<div class="form-block">
							<label for="phone">Re password*</label>
							<input type="password" name="re_password" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Register</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection