@extends('Front.layout')<!--Page title-->
@section('title')
Profile
@endsection
@section('content')
<div class="preloader"></div> 
	<section class="our-log bgc-fa">
		<div class="container">
			<div class="row px-0"> 
				<div class="col-12 row px-0"> 
					<div class="col-12 col-lg-3 px-2"> 
						<div class="col-12 px-0 mb-2" style="">
							<div class="col-12 py-2 text-center mb-4" style="" >
								<img src="{{auth()->user()->getUserAvatar()}}" style="width: 150px;height: 150px;border-radius: 50%;display: inline-block;border-radius: 50%;">  
							</div>
						</div>  

						<div class="col-12 px-0 mb-2" style="box-shadow: 0px 0px 12px #ddd;border-radius: 10px;background: #fff;">
							<a href="/profile">
								<div class="col-12 py-2" style="" >
									Profile
								</div>
							</a> 
						</div> 
						<div class="col-12 px-0 mb-2" style="box-shadow: 0px 0px 12px #ddd;border-radius: 10px;background: #fff;">
							<a href="/profile/edit">
								<div class="col-12 py-2" style="" >
									 Edit Profile
								</div>
							</a>
						</div>
						<div class="col-12 px-0 mb-2" style="box-shadow: 0px 0px 12px #ddd;border-radius: 10px;background: #fff;">
							<a href="/profile/contact">
								<div class="col-12 py-2" style="" >
									 Contact
								</div>
							</a>
						</div>
						<div class="col-12 px-0 mb-2" style="box-shadow: 0px 0px 12px #ddd;border-radius: 10px;background: #fff;">
							<a href="/profile/edit-password">
								<div class="col-12 py-2" style="" >
									 Security
								</div>
							</a>
						</div>
						
						<div class="col-12 px-0 mb-2" style="box-shadow: 0px 0px 12px #ddd;border-radius: 10px;background: #fff;">
							<a href="/property">
								<div class="col-12 py-2" style="" >
									 My Properties
								</div>
							</a>
						</div>  
						<div class="col-12 px-0 mb-2" style="box-shadow: 0px 0px 12px #ddd;border-radius: 10px;background: #fff;">
							<a href="/property/create">
								<div class="col-12 py-2" style="" >
									 Create Property
								</div>
							</a>
						</div>{{-- 
						<div class="col-12 px-0 mb-2" style="box-shadow: 0px 0px 12px #ddd;border-radius: 10px;background: #fff;">
							<div class="col-12 py-2" style="" >
								 Contact Us
							</div>
						</div> --}}

						<div class="col-12 px-0 mb-2" style="box-shadow: 0px 0px 12px #ddd;border-radius: 10px;background: #fff;" onclick="$('#logout *').click();">
							<a href="#">
								<div class="col-12 py-2" style="" >
									 Logout
								</div>
							</a>
						</div>

					</div>
					<div class="col-12 col-lg-9">
						<div class="col-12 px-0 mb-2" style="box-shadow: 0px 0px 12px #f1f1f1;border-radius: 3px;background: #fff;min-height: 80vh">
							<div class="col-12 px-0"   > 
								@yield('header') 
							</div>
						</div> 
					</div>
				</div>
				 
			</div>
		</div>
	</section>

 
@endsection