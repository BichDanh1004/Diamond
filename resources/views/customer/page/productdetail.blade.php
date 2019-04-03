@extends('customer.layout.master')
@section('content')
<div class="space80">&nbsp;</div>
<div class="inner-header">
		<div class="container">
			<div class="pull-right">
				<h3>Chi Tiết Sản Phẩm</h3>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

<div class="space80">&nbsp;</div>
<div class="container">
       <div id="content my-5">
			<div class="row">
				<div class="col-sm-9">
					<div class="row">
						<div class="col-sm-4">
							<div class="img-detaiproduct">
							@foreach ($image as $img)
							@if ($img->id_product == $product->id_product)
							<img src="customer/images/{{$img->img_path}}" class="img-detaiproduct" style="width:270px;height:320px">
							@endif
							@endforeach
							</div>
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title">Sample Woman Top</p>
								<p class="single-item-price">
									<span>{{number_format($product->price)}} vnđ</span>
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo ms id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe.</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Options:</p>
							<div class="single-item-options">
								<select class="wc-select" name="color">
									<option>Số lượng</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<h4>Mô Tả</h4>

						<div class="panel" id="tab-description" style="display: block;">
							<p>{{$product->description}}</p>
						</div>		
					</div>
				</div>
			</div>
		</div> <!-- #content -->
</div>
@endsection