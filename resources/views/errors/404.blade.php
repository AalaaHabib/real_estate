@extends('errors.minimal')
@section('message')
<!-- Our Error Page -->
<section class="our-error bgc-f7">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="error_page footer_apps_widget">
						<img class="img-fluid" src="{{asset('Front/images')}}/resource/error.png" alt="error.png">
						<div class="erro_code"><h1>Ohh! Page Not Found</h1></div>
						<p>We can’t seem to find the page you’re looking for</p>
						
					</div>
					<a class="btn btn_error btn-thm" href="{{route('homepage')}}">Back To Home</a>
				</div>
			</div>
		</div>
    </section>
@endsection
