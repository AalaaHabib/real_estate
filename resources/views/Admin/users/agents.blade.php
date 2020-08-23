@extends('Admin/layout')
@section('content')
<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-lg-9 col-xl-10 maxw100flex-992">
					<div class="row">
						<div class="col-lg-12 mb10">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">Mange All types of agents which Enter the website</h2>
								<p>All Details tou need About your site.</p>
							</div>
						</div>
                        <div class="col-lg-12 mb10">
				        	<div class="row">
                        @foreach($agents as $agent)
						<div class="col-md-4 col-lg-4">
							<div class="feat_property home7 agency">
								<div class="thumb">
									<img class="img-fluid" 
									{{-- {{asset('uploads/users/Agent'.$agent->img)}} --}}
									src="https://nafezly.com/site_images/user.png" alt="1.jpg">
								</div>
								<div class="details">
									<div class="tc_content">
										<h4>{{$agent->UserName}}</h4>
										<p class="text-thm">
                                           <a href="#" class="text-thm"> Agent</a> </p>
										<ul class="prop_details mb0">
											<li><a href="#">Office: {{$agent->office}}</a></li>
											<li><a href="#">Mobile: {{$agent->phone}}</a></li>
											<li><a href="#">Fax: {{$agent->faxNumber}}</a></li>
											<li><a href="#">Email: <span class="__cf_email__" data-cfemail="b8c8d9d3cdd4d4d9f8ded1d6dcd0d7cdcbdd96dbd7d5">{{$agent->email}}</span></a></li>
                                           
                                        </ul>

                                        <div class="col-12 px-0 pt-2 text-center d-flex justify-content-center"> 
											<a href="{{route('admin.users.destroy',$agent->id)}}" class="btn btn-danger float-right d-inline-block " style="border-radius: 20px"> 
												<span class="fal fa-trash" style="color: #fff;"></span> Destroy
											</a>

										</div>


									</div>
									<div class="fp_footer">
									<ul class="fp_meta  d-flex justify-content-around">
											<li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-google"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
                        @endforeach
					</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>

@endsection