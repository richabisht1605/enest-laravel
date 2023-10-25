<!--Calling to main file in layouts-->
@extends('layouts.main')
<!--Calling  home  in main file-->
@section('home')
	<!--footer div goes here-->
	<div class="footer">
		<!--img  div goes here-->
		<div class="main-img">
			<img src="{{asset('assets/images/16.png')}}">
		</div>
		<!--including side-bar here-->
			@include('sidebar');
		<!--contact div goes here-->
		<div class="contact">
			<!--contact-us div goes here-->
			<div class="contact-us">
				<p>FEATURED PRODUCTS</p>
			</div>
			<!--contact-us div ends here-->
			<!--Cam-info div goes here-->
			<div class="Camera-info">
				@foreach ($products->random(6) as $product)
				<!--samsung div goes here-->
					<div class="samsung-cam">
						<!--cam-info div goes here-->
						<div class="cam-info">
							<img src="{{ asset($product->product_image) }}">
							<!--sam-prc div goes here-->
							<div class="sam-prc">
								<span>{{$product->pname}}</span>
								<p>Rs. {{$product->pprice}}</p>
							</div>
							<!--sam-prc div ends here-->
							<hr class="hr2">
							<!--cart-btn div goes here-->
							<div class="cart-btn">
								<i class="fa fa-plus-circle" aria-hidden="true"></i>
								<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
								<i class="fa fa-plus" aria-hidden="true"></i>
								<i class="fa fa-cart-plus" aria-hidden="true"></i>
								<input type="submit" name="" value="Add to cart">
							</div>
							<!--cart-btn div ends here-->
						</div>
						<!--cam-info div ends here-->
					</div>
					<!--samsung div ends here-->
				@endforeach
			</div>
			<!--Cam-info div ends here-->
		</div>
		<!--contact div ends here-->
	</div>
	<!--footer div ends here-->
	@endsection
	<!--section end-->