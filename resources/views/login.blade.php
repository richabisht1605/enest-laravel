@extends('layouts.main')
@section('login')
	<div class="footer">
		<div class="login-here">
			<div class="login">
				<p>Login Here</p>
				<div  class="user-info">
					{{--form goes here--}}
					<form method="post" action="{{Route('login.data')}}">
						{{ csrf_field() }}
						{{--table goes here--}}
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
						{{--table  ends here--}}
					</form>
					{{--form div goes here--}}
				</div>
			</div>
		</div>
	</div>
	{{--signup div goes here--}}
	<div class="sign-up">
		<div class="sign">
			<p>New to Enest? <a href=""> Sign up</a></p>
			<div  class="user-info">
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
				<!--form ends here-->
			</div>
		</div>
	</div>
	{{--end section--}}
@endsection
