<!--Calling to main file in layouts-->
@extends('layouts.main')
<!--Calling  contact  in main file-->
@section('contact')
<!--footer div goes here-->
	<div class="footer">
	<!--including side-bar here-->
	@include('sidebar')
	<!--contact div goes here-->
		<div class="contact">
			<!--contact-us div goes here-->
			<div class="contact-us">
				<p>CONTACT US</p>
			</div>
			<!--customer div goes here-->
			<div class="costomer-info">
				<!--contact-service div goes here-->
				<div class="costomer-service">
					<p>Customer Service:91 7508115758</p>
					<p>Ludhiana,Punjab,INDIA</p>
					<p>Yorex Infotec.</p>
				</div>
				<!--contact-service div ends here-->
				<hr class="hr">
				<!--info div goes here-->
				<div class="info">
					<div class="required-info">
						<h4>Contact Us</h4>
						<p>Have a question? We have 24x7 Costomer Service.</p>
						<p>Befor you contact us,skim through our self Serve opton and Frequently Asked Question for Quicker answer.</p>
						<p>Want to know more about the status of the orders?</p>
						<p>Login to view our order.</p>
					</div>
				</div>
				<!--info div ends here-->
				<!--border div goes here-->
				<div class="border">
					<!--border-1 div goes here-->
					<div class="border-1">
						<!--border-2 div goes here-->
						<div class="border-2">
							<p>Contact Us</p>
						</div>
						<!--border-2 div ends here-->
						<div class="requir-info">
							<span>*Required information</span>
						</div>
						<div class="input-info">
							<div class="input-information">
								<!--form goes here-->
								<form method="post" action="{{Route('contact.us')}}">
									{{ csrf_field() }}
									<!--table goes here-->
									<table class=" form">
										<tr>
											<td><p>full Name*</p></td>
											<td><input type="text" name="fn" required></td>
										</tr>
										<tr>
											<td><p>E-mail Addresss</p></td>
											<td><input type="email" name="ea" required></td>
										</tr>
										<tr>
											<td><p>Message</p></td>
											<td><textarea name="me" required></textarea></td>
										</tr>
										<tr>
											<td><input type="submit" value="Save" name="save"></td>
										</tr>
									</table>
									<!--table ends here-->
								</form>
								<!--form ends here-->
							</div>
							<!--input-div ends here-->
						</div>
						<!--input-info ends here-->
					</div>
					<!--border-1 div ends here-->
				</div>
				<!--border div ends here-->
				<!--send btn goes here-->
				<div class="snd-btn">
					<button>Send Now</button>
				</div>
				<!--send btn ends here-->
			</div>
			<!--customer div ends here-->
		</div>
		<!--contact div ends here-->
	</div>
	<!--footer div ends here-->
@endsection