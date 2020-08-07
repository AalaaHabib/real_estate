@extends('Front/layout')<!--Page title-->
@section('title')
Register
@endsection

@section('content')
<div class="preloader"></div>

	
		
	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Rgister</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Register</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our LogIn Register -->
	<section class="our-log bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="login_form inner_page">
                        @include('Front.includes.errors')
						<form method="post" action="{{Route('user.handleRegister')}}">
                            @csrf
							<div class="heading">
                            <h3 class="text-center">Register to start learning</h3>
							<p class="text-center">Have an account? <a class="text-thm" href="{{route('user.login')}}">Login</a></p>
                            </div>
                            <div class="form-group">
							    	<input type="text" name="UserName" class="form-control" id="exampleInputName2" placeholder="Username">
								</div>
							 <div class="form-group">
						    	<input name="email" type="email" class="form-control" id="exampleInputEmail3" placeholder="Email Address">
							</div>
							<div class="form-group">
						    	<input name="password" type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
							</div>
                            <div class="form-group custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" value=1 name="is_Agent" id="exampleCheck3">
									<label class="custom-control-label" for="exampleCheck3">Want to become an Agent?</label>
								</div>
							<button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
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
				</div>
			</div>
		</div>
	</section>

	<!-- Start Partners -->
	<section class="start-partners bgc-thm pt50 pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="start_partner tac-smd">
						<h2>Become a Real Estate Agent</h2>
						<p>We only work with the best companies around the globe</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="parner_reg_btn text-right tac-smd">
						<a class="btn btn-thm2" href="#">Register Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection