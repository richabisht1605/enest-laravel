<!--Calling to main file in layouts-->
@extends('layouts.main')
<!--Calling  login  in main file-->
@section('login')
	<!--footer div goes here-->
	<div class="footer">
		<!--login div goes here-->
		<div class="login-here">
			<div class="login">
				<p>Login Here</p>
				<div  class="user-info">
					<form method="post" action="{{Route('login.data')}}">
						{{ csrf_field() }}
						<table class="login-1">
							<tr class="inpt">
								<td><span>Username</span></td>
								<td><input type="text" name="fullname"></td>
							</tr><br>
							<tr class="inpt">
								<td ><span>Password</span></td>
								<td><input type="password" name="password"></td>
							</tr>
							<tr class="logn-btn" >
								<td></td>
								<td><input class="log" type="submit" name="save" value="Login"/></td>
							</tr>
						</table>
						<!--table  ends here-->
					</form>
					<!--form div goes here-->
				</div>
			</div>
		</div>
		<!--login div ends here-->
	</div>
	<!--signup div goes here-->
	<div class="sign-up">
		<!--sign div goes here-->
		<div class="sign">
			<p>New to Enest? <a href=""> Sign up</a></p>
			<!--  user info  here-->
			<div  class="user-info">
				<!--form starts  here-->
				<form method="post" action="{{Route('signup.data')}}">
					{{ csrf_field() }}
					<!--table starts  here-->
					<table class="login-1">
						<tr class="inpt-1">
							<td ><span>Full Name</span></td>
							<td><input type="text" name="name"></td>
						</tr><br>
						<tr class="inpt-1">
							<td ><span>Email</span></td>
							<td><input type="text" name="email"></td>
						</tr>
						<tr class="inpt-1">
							<td ><span>Password</span></td>
							<td><input type="password" name="password"></td>
						</tr>
						<tr class="logn-btn" >
							<td></td>
							<td><input class="log" type="submit" name="save" value="Sign up"></td>
						</tr>
					</table>
					<!--table ends here-->
				</form>
				<!--table ends here-->
			</div>
			<!--user info div  ends here-->
		</div>
		<!--sign div  ends here-->
	</div>
	<!--sign-up ends here-->
@endsection
<!--end section-->