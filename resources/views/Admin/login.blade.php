@extends('Admin/loginLayout')

@section('title')
Admin Login
@endsection

@section('content')
<!-- Our LogIn Register -->
<section class="our-log bgc-fa">
		<div class="container">
			<div class="row my-5 py-5">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					@include('Admin/inc/errors')
					<div class="login_form inner_page pb-5">
						<form method="post" action="{{route('admin.login')}}">
							@csrf
							<div class="heading">
								<h3 class="text-center">Login to your Dashboard</h3>	
							</div>
							 <div class="form-group">
						    	<input type="email"  name="email" class="form-control" id="exampleInputEmail3" placeholder="Email Address">
							</div>
							<div class="form-group">
						    	<input type="password" name="password"  class="form-control" id="exampleInputPassword4" placeholder="Password">
							</div>
						
							<button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>
					
						</form>
					</div>
				</div>
			</div>
		</div>
    </section>
    
    @endsection