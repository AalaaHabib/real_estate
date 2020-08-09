@extends('Admin/layout')

@section('content')

<!-- Our Dashbord -->
<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-lg-9 col-xl-10 maxw100flex-992">
					<div class="row">
						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-992">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
									<ul id="myDropdown" class="dropdown-content">
										<li><a href="page-dashboard.html"><span class="flaticon-layers"></span> Dashboard</a></li>
										<li><a href="page-message.html"><span class="flaticon-envelope"></span> Message</a></li>
										<li><a href="page-my-properties.html"><span class="flaticon-home"></span> My Properties</a></li>
										<li><a href="page-my-favorites.html"><span class="flaticon-heart"></span> My Favorites</a></li>
										<li><a href="page-my-savesearch.html"><span class="flaticon-magnifying-glass"></span> Saved Search</a></li>
										<li><a href="page-my-review.html"><span class="flaticon-chat"></span> My Reviews</a></li>
										<li><a href="page-my-packages.html"><span class="flaticon-box"></span> My Package</a></li>
										<li class="active"><a href="page-my-profile.html"><span class="flaticon-user"></span> My Profile</a></li>
										<li><a href="page-add-new-property.html"><span class="flaticon-filter-results-button"></span> Add New Listing</a></li>
										<li><a href="page-login.html"><span class="flaticon-logout"></span> Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12 mb10">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">You Can Change siteContent</h2>
								<p>We are glad to see you again!</p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="my_dashboard_review">
								<div class="row">
									<div class="col-xl-2">
										<h4>Home Section</h4>
									</div>
									<div class="col-xl-10">
										<form method="post" action="{{route('siteContent.update')}}">
											@csrf
											<div class="row">									
												<div class="col-lg-6 col-xl-6">
													<div class="my_profile_setting_input form-group">
														<label for="formGroupExampleInput1">Title</label>
														<input type="text" name="banner_titile" value="{{json_decode($banner->content)->title}}" class="form-control" id="formGroupExampleInput1" placeholder="alitfn">
													</div>
												</div>
												<div class="col-lg-6 col-xl-6">
													<div class="my_profile_setting_input form-group">
														<label for="formGroupExampleEmail">Sub Titile</label>
														<input type="text"name="banner_subtitile" value="{{json_decode($banner->content)->sub_title}}" class="form-control" id="formGroupExampleEmail" placeholder="creativelayers@gmail.com">
													</div>
												</div>
												<div class="col-xl-12 text-right">
													<div class="my_profile_setting_input">											
														<button class="btn btn2" type="submit">Update HomeSection</button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							
							<div class="my_dashboard_review mt30">
								<div class="row">
									<div class="col-xl-2">
										<h4>Change password</h4>
									</div>
									<div class="col-xl-10">
										<div class="row">
											<div class="col-xl-6">
												<div class="my_profile_setting_input form-group">
											    	<label for="formGroupExampleOldPass">Old Password</label>
											    	<input type="text" class="form-control" id="formGroupExampleOldPass" placeholder="alitfn">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 col-xl-6">
												<div class="my_profile_setting_input form-group">
											    	<label for="formGroupExampleNewPass">New Password</label>
											    	<input type="text" class="form-control" id="formGroupExampleNewPass">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="my_profile_setting_input form-group">
											    	<label for="formGroupExampleConfPass">Confirm New Password</label>
											    	<input type="text" class="form-control" id="formGroupExampleConfPass">
												</div>
											</div>
											<div class="col-xl-12">
												<div class="my_profile_setting_input float-left fn-520">
													<button class="btn btn3 btn-dark">Update Profile</button>
												</div>
												<div class="my_profile_setting_input float-right fn-520">
													<button class="btn btn2">Update Profile</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
    

@endsection