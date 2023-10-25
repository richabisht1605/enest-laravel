<!--Calling to main file in layouts-->
@extends('layouts.main')
<!--Calling  addproduct  from main file-->
@section('addproduct')
{{--if goes here--}}
	@if(session('success'))
		<span class="alert alert-success">
			{{ session('success') }}
		</span>
	@endif	
	{{--if ends here--}}
	<div class="footer">
		{{--including side-bar  here--}}
		@include('sidebar')
		{{--contact div  goes here--}}
		<div class="contact">
			{{-- loop  goes here--}}
			@foreach ($products as $product)
			{{--small divs of image detail stock etc goes here--}}
				<div class="contact-us">
					<p>{{$product->pname}}</p>	
				</div>
				<div class="dish-info">
					<div class="machine-pic">
						<div class="img">
							<img src="{{asset($product->product_image) }}" >
						</div>
						<div class="stock">
							<p>In Stock: {{$product->pstock}}</p>
						</div>
						<div class="detail">
							<span>Details:</span>
							<p>{{$product->pname}}</p>
						</div>
					</div>
					<div class="machine-info">
						<div class="washer">
							<p>{{$product->pname}}</p>
						</div>
						<div class="model-info">
							<span>Model:{{$product->pname}}</span>
							<p>Description:{{$product->pdesc}}</p>
						</div>
						<div class="quantity">
						<form method="post" action="{{Route('AddToCart')}}">
							{{ csrf_field() }}
							<table>
								<tr>
									<td class="qty">Enter quantity</td>
									<td><input type="number" name="qty"/></td>
								</tr>
							</table>
							<div class="price">
								<span>Rs. {{$product->pprice}}</span>
							</div>
						</div>
						<div class="cart">
							<input type="hidden" name="product_id" value="{{ $product->id }}">
							<input type="submit" name="add" value="Add to Cart">
						</div>
						</form>
						<div class="checkout">
							<input type="submit" name="" value="checkout">
						</div>
					</div> 
				</div>
				{{--small divs of image detail stock etc ends here--}}
			@endforeach
			{{--loop ends here--}}
			{{--dish info goes here--}}
			<div class="info">
				{{--form goes here--}}
				<form>
					{{--table goes here--}}
					<table class="table-info">
						<tr>
							<td class="nme">Enter name</td>
							<td><input type="" name=""></td>
						</tr>
						<tr>
							<td class="nme">Enter Email</td>
							<td><input type="" name=""></td>
						</tr>
						<tr>
							<td class="nme">Enter Review</td>
							<td><textarea></textarea></td>
						</tr>
						<tr>
							<td class="nme">Rating</td>
							<td><input type="" name=""></td>
						</tr>
						<tr>
							<td class="btnn-1">
								<input type="submit" name="" value="Submit query">
							</td>
						</tr>
					</table>
					{{--table ends here--}}
				</form>
				{{--form ends here--}}
			</div>
			{{--dish info ends here--}}
		</div>
		{{--contact div  ends here--}}
	</div>
	{{--footer div  ends here--}}
@endsection						