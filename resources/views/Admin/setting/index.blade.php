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
								<h2 class="breadcrumb_title">Update Your Website Data</h2>
								<p>We are glad to see you again!</p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="my_dashboard_review">
                                @include('admin.inc.errors')
                            <form method="post" action="{{route('SettingtHandle')}}">
                                @csrf
								<div class="row">
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput1">Website Name</label>
                                            <input type="text" name="logo" value="{{$setting->logo}}" class="form-control" id="formGroupExampleInput1" placeholder="alitfn">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleEmail">Email</label>
                                            <input type="email" name="email" value="{{$setting->email}}" class="form-control" id="formGroupExampleEmail" placeholder="creativelayers@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput3">City </label>
                                            <input type="text" name="city" value="{{$setting->city}}" class="form-control" id="formGroupExampleInput3">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput4">Address</label>
                                            <input type="text" name="address" value="{{$setting->address}}" class="form-control" id="formGroupExampleInput4">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput5">Phone</label>
                                            <input type="text" name="phone" value="{{$setting->phone}}" class="form-control" id="formGroupExampleInput5">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput6">Work_Hours</label>
                                            <input type="text" name="works_hour" value="{{$setting->works_hour}}" class="form-control" id="formGroupExampleInput6">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput7">FaceBook</label>
                                            <input type="text" name="fb" value="{{$setting->fb}}" class="form-control" id="formGroupExampleInput7">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput8">tiwitter</label>
                                            <input type="text" name="tiwitter" value="{{$setting->tiwitter}}" class="form-control" id="formGroupExampleInput8">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput9">instgram</label>
                                            <input type="text" name="insta" value="{{$setting->insta}}" class="form-control" id="formGroupExampleInput9">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="formGroupExampleInput10">pinterest</label>
                                            <input type="text" name="prinst" value="{{$setting->prinst}}" class="form-control" id="formGroupExampleInput10">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 text-right">
                                        <div class="my_profile_setting_input">
                                            <button class="btn btn2" type="submit">Update Setting</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    
@endsection