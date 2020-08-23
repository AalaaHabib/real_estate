@extends('Admin/layout')
@section('content')
<!-- Our Dashbord -->

<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-lg-9 col-xl-10 maxw100flex-992">
					<div class="row">
						<div class="col-lg-12 mb10">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">Hello , {{$admin_name['userName']}}</h2>
								<p>All Details tou need About your site.</p>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one">
								<div class="icon py-2"><span class="fal fa-building "></span></div>
								<div class="detais">
									<div class="timer">{{$properties}}</div>
									<p>All Properties</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one style2">
								<div class="icon py-2"><span class="fal fa-map-marker-alt"></span></div>
								<div class="detais">
									<div class="timer">{{$cities}}</div>
									<p>Total Cities</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one style3">
								<div class="icon py-2"><span class="fal fa-bars"></span></div>
								<div class="detais">
									<div class="timer">{{$cats}}</div>
									<p>Total Categoriees</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one style4">
								<div class="icon py-2"><span class="fal fa-users pt-2"></span></div>
								<div class="detais">
									<div class="timer">{{$users+$agencies}}</div>
									<p>Users & companies</p>
								</div>
							</div>
						</div>
						<div class="col-xl-7">
							<div class="application_statics">
								<h4>View Statistics</h4>
								<div class="c_container"></div>
							</div>
						</div>
						<div class="col-xl-5">
							<div class="recent_job_activity">
								<h4 class="title">Recent Activities</h4>
				
								<div class="grid">
									<ul>
										<li class="list-inline-item"><div class="icon"><span class="flaticon-home"></span></div></li>
										<li class="list-inline-item"><p> Mange <strong><a href="{{route('adminProp.index')}}">All Properties</a> </strong>which has been published !</li>
									</ul>
								</div>
								<div class="grid">
									<ul>
										<li class="list-inline-item"><div class="icon"><span class="flaticon-chat"></span></div></li>
										<li class="list-inline-item"><p>You See <strong><a href="{{route('adminMessage.index')}}">Users Messages</a></strong> to solve thier problems</p></li>
									</ul>
								</div>
								<div class="grid mb0">
									<ul class="pb0 mb0 bb_none">
										<li class="list-inline-item"><div class="icon"><span class="flaticon-heart"></span></div></li>
										<li class="list-inline-item"><p>info about <strong><a href="{{route('admin.users.index')}}">Users </a></strong>that Registered in Your Website!</p></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>

@endsection