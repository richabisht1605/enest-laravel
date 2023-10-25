<html>
<head>
	<title>ENEST</title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!--main div goes here-->
	<div class="main-div">
		<!--head div goes here-->
		<div class="head-div">
			<!--main div goes here-->
			<div class="main">
				<!-- head goes here-->
				<div class="head">
					<span>EVEST</span>
					<p>THE BIGGEST CHOICE OF THE WEB</p>
				</div>
				<!-- head ends here-->
				<!--login-btn goes here-->
				<div class="btn">
						@if(!Auth::guard('signup')->check())
							<a href="{{ route('login') }}"><input type="button" name="" value="Log in"></a>
						@else
							<a href="{{ route('logout') }}"><input type="button" name="" value="Log out : {{ Auth::guard('signup')->user()->fullname}}"></a> 
						@endif
				</div>
				<!--login-btn ends here-->
			</div>
			<!--main div ends here-->
		</div>
		<!--head div ends here-->
		<!--home-page div goes here-->
		<div class="home-page">
			<div class="pagnation">
				<div class="list">
					<ul>
						<a href="{{url('/')}}"><li>HOME</li></a>
						<li>ALL PRODUCTS</li>
						<li>REVIEWS</li>
						<li>CONTACT</li>
						<li>FAQS</li>
					</ul>
				</div>
				<div class="search">
					<div class="search-1">
						<div class="input">
							<input type="text" name="">
						</div>
						<div class="btnn">
							<input type="button" name="" value="Search">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--home-page div goes here-->
		<div class="null">
		</div>
		<!--main-categories div goes here-->
		<div class="main-categorious">