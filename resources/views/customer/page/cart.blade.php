@extends('customer.layout.master')
@section('content')
<div class="container">
		<div>		
            <h2 class='title-cart'>Giỏ Hàng</h2>
			<div class="table-responsive">
				<!-- Shop Products Table -->
				<table class="shop_table_1 beta-shopping-cart-table" cellspacing="0">
					<thead>
						<tr>
                            <th class="product-image">Image</th>
							<th class="product-name">Name Product</th>
							<th class="product-price">Price</th>
							<th class="product-quantity">QuanTity</th>
							<th class="product-total">Total</th>
							<th class="product-remove">Remove</th>
						</tr>
					</thead>
					<tbody>	
					@foreach( $product as $pro)
						<tr class="cart_item">
							<td class="product-image">
								<div class="media">
								@foreach($img as $image)
                                @if ($pro['item']['id_product'] == $image->id_product)
									<img class="pull-left" src="customer/images/{{$image->img_path}}" alt="">
							    @endif
                                @endforeach
									<div class="media-body">
										<a class="table-edit" href="#">Edit</a>
									</div>
								</div>
							</td>
                            <td class="product-name">
							{{$pro['item']['product_name']}}
							</td>
							<td class="product-price">
								<span class="amount">{{$pro['item']['price']}} vnđ</span>
							</td>							

							<td class="product-quantity">
								<select name="product-qty" id="product-qty">
                                <option value="0">{{$pro['qty']}}</option>
							    	<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
                                    <option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
							</td>

							<td class="product-subtotal">
								<span class="amount">{{$pro['qty']}}*<span>{{number_format($pro['item']['price'])}}</span></span>
							</td>

							<td class="product-remove">
								<a href="delete_cart" class="remove" title="Remove this item"><i class="fas fa-trash-alt"></i></a>
							</td>
                        </tr>
						@endforeach
					</tbody>
				</table>
				<!-- End of Shop Table Products -->
			</div>

			<div class="cart-collaterals">
				<div class="cart-totals pull-right">
					<div class="cart-totals-row"><h5 class="cart-total-title">Cart Totals</h5></div>
					<div class="cart-totals-row"><span>Cart Subtotal:</span> <span> 		   
                           {{number_format($totalPrice)}}          
						</span></div>
					<div class="cart-totals-row"><span>Shipping:</span> <span>Free Shipping</span></div>
				</div>

				<div class="clearfix"></div>
			</div>
			<!-- End of Cart Collaterals -->
			<div class="clearfix"></div>

		</div> <!-- #content -->
	</div>
@endsection