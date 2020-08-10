@extends('Front/layout')<!--Page title-->
@section('title')
Profile
@endsection
@section('content')
<div class="preloader"></div>

	
		
	<!-- Inner Page Breadcrumb -->

 
	<!-- Our LogIn Register -->
	<section class="our-log bgc-fa">
		<div class="container">
			<div class="row px-0">


				<div class="col-12 row px-0">

					


					<div class="col-3 px-2">

						<div class="col-12 px-0 mb-2" style="">
							<div class="col-12 py-2 text-center" style="" >
								<span class="fal fa-user " style="font-size: 200px;"></span>
							</div>
						</div> 


						<div class="col-12 px-0 mb-2" style="box-shadow: 0px 0px 12px #ddd;border-radius: 30px;background: #fff;">
							<div class="col-12 py-2" style="" >
								 Profile
							</div>
						</div> 
						<div class="col-12 px-0 mb-2" style="box-shadow: 0px 0px 12px #ddd;border-radius: 30px;background: #fff;">
							<div class="col-12 py-2" style="" >
								 Edit Profile
							</div>
						</div>
						<div class="col-12 px-0 mb-2" style="box-shadow: 0px 0px 12px #ddd;border-radius: 30px;background: #fff;">
							<div class="col-12 py-2" style="" >
								 My Ads
							</div>
						</div>  
						<div class="col-12 px-0 mb-2" style="box-shadow: 0px 0px 12px #ddd;border-radius: 30px;background: #fff;">
							<div class="col-12 py-2" style="" >
								 Create List
							</div>
						</div>
						<div class="col-12 px-0 mb-2" style="box-shadow: 0px 0px 12px #ddd;border-radius: 30px;background: #fff;">
							<div class="col-12 py-2" style="" >
								 Contact Us
							</div>
						</div>

						<div class="col-12 px-0 mb-2" style="box-shadow: 0px 0px 12px #ddd;border-radius: 30px;background: #fff;">
							<div class="col-12 py-2" style="" >
								 Logout
							</div>
						</div>

					</div>
					<div class="col-9">
						<div class="col-12 px-0 mb-2" style="box-shadow: 0px 0px 12px #ddd;border-radius: 10px;background: #fff;min-height: 80vh">
							<div class="col-12 px-0"   >
								<div class="col-12 border-bottom   py-3">
									Profile
								</div>
							</div>
						</div> 
					</div>
				</div>
				{{-- <div class="col-12 " style="min-height: 90vh">
					<h1>Peter</h1>
				</div> --}}


				{{-- <div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="login_form inner_page">
                        @include('Front.includes.errors')
						<form method="post" action="{{Route('user.handleLogin')}}">
                            @csrf
							<div class="heading">
								<h3 class="text-center">Login to your account</h3>
								<p class="text-center">Don't have an account? <a class="text-thm" href="{{route('user.register')}}">Sign Up!</a></p>
							</div>
							 <div class="form-group">
						    	<input name="email" type="email" class="form-control" id="exampleInputEmail3" placeholder="Email Address">
							</div>
							<div class="form-group">
						    	<input name="password" type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
							</div>
							<div class="form-group custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="exampleCheck3">
								<label class="custom-control-label" for="exampleCheck3">Remember me</label>
								<a class="tdu btn-fpswd float-right" href="#">Forgot Password?</a>
							</div>
							<button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>
							<div class="divide">
								<span class="lf_divider">Or</span>
								<hr>
							</div>
							<div class="row mt40">
								<div class="col-lg">
									<button type="submit" class="btn btn-block color-white bgc-fb mb0"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
								</div>
								<div class="col-lg">
									<button type="submit" class="btn btn2 btn-block color-white bgc-gogle mb0"><i class="fa fa-google float-left mt5"></i> Google</button>
								</div>
							</div>
						</form>
					</div>
				</div> --}}
			</div>
		</div>
	</section>

 
@endsection