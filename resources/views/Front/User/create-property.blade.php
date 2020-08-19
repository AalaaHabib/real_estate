@extends('Front.User.layout.app')
@section('content')
<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid ovh">
			<div class="container">
				 
				<div class="col-lg-12 maxw100flex-992">
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
										<li><a href="page-my-profile.html"><span class="flaticon-user"></span> My Profile</a></li>
										<li class="active"><a href="page-add-new-property.html"><span class="flaticon-filter-results-button"></span> Add New Listing</a></li>
										<li><a href="page-login.html"><span class="flaticon-logout"></span> Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12 mb10">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">Add New Property</h2>
								<p>We are glad to see you again!</p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="my_dashboard_review">
								<form method="POST" action="{{route('property.store')}}" enctype="multipart/form-data" >
									@csrf
									 
									<div class="row">
										<div class="col-lg-12">
											<h4 class="mb30">Create Listing</h4>
											<div class="my_profile_setting_input form-group">
										    	<label for="propertyTitle">Property Title</label>
										    	<input type="text" class="form-control" id="propertyTitle" name="title">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="my_profile_setting_textarea">
											    <label for="propertyDescription">Description</label>
											    <textarea class="form-control" id="propertyDescription" rows="7" name="desc"></textarea>
											</div>
										</div>
										<div class="col-lg-6 col-xl-6">
											<div class="my_profile_setting_input ui_kit_select_search form-group">
										    	<label>Type</label>
												<select name="category_id" class="selectpicker" data-live-search="true" data-width="100%">
													@php 
													$cats=\App\Ctegory::get();
													@endphp
													@foreach($cats as $cat)
													<option value="{{$cat->id}}">{{$cat->name}}</option>
													@endforeach 
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-xl-6">
											<div class="my_profile_setting_input ui_kit_select_search form-group">
										    	<label>Status</label>
												<select name="status" class="selectpicker" data-live-search="true" data-width="100%">
													<option value="rent">Rent</option>
													<option value="buy">Buy</option> 
												</select>
											</div>
										</div>
										<div class="col-lg-3 col-xl-3">
											<div class="my_profile_setting_input form-group">
										    	<label for="formGroupExamplePrice">Price</label>
										    	<input type="number" class="form-control" id="formGroupExamplePrice" name="price">
											</div>
										</div>
										<div class="col-lg-3 col-xl-3">
											<div class="my_profile_setting_input form-group">
										    	<label for="formGroupExampleArea">Area</label>
										    	<input type="number" class="form-control" id="formGroupExampleArea" name="size">
											</div>
										</div>
										<div class="col-lg-3 col-xl-3">
											<div class="my_profile_setting_input ui_kit_select_search form-group">
										    	<label>Rooms</label>
												<select class="selectpicker" data-live-search="true" data-width="100%" name="Room_num">
													@for($i=1;$i<6;$i++)
													<option value="{{$i}}">{{$i}}</option>
													@endfor 
												</select>
											</div>
										</div>


										<div class="col-lg-3 col-xl-3">
											<div class="my_profile_setting_input ui_kit_select_search form-group">
										    	<label>Bathroom Numbers</label>
												<select class="selectpicker" data-live-search="true" data-width="100%" name="bathRoom_num">
													@for($i=1;$i<3;$i++)
													<option value="{{$i}}">{{$i}}</option>
													@endfor 
												</select>
											</div>
										</div>


										<div class="col-lg-12"> 
											<div class="my_profile_setting_input form-group">
										    	<label for="propertyAddress">Address</label>
										    	<input type="text" class="form-control" id="propertyAddress" name="address">
											</div>
										</div>

										<div class="col-lg-12"> 
											<div class="my_profile_setting_input ui_kit_select_search form-group">
										    	<label for="propertyAddress">city</label>
										    	<select class="selectpicker" data-live-search="true" data-width="100%" name="country_id">
													@php 
													$countrys=\App\Counrty::get();
													@endphp
													@foreach($countrys as $country)
													<option value="{{$country->id}}">{{$country->name}}</option>
													@endforeach 
												</select> 
											</div>
										</div>


										

										<hr>

										<div class="col-12 row px-0">
											 
										

										<div class="col-12 col-lg-6">
											 <div class="col-lg-12"> 
												<div class="my_profile_setting_input form-group">
											    	<label for="propertyAddressx">Main img</label>
											    	<input type="file" class="form-control" id="propertyAddressx" name="main_imgx">
												</div>
											</div>

										</div>


										<div class="col-12 col-lg-6 row "> 
											 <div class="col-lg-12 col-xl-6"> 
												<div class="my_profile_setting_input form-group">
											    	<label for="propertyAddress1">Image 1 </label>
											    	<input type="file" class="form-control" id="propertyAddress1" name="image[]">
												</div>
											</div>
											<div class="col-lg-12 col-xl-6"> 
												<div class="my_profile_setting_input form-group">
											    	<label for="propertyAddressd">Image 2 </label>
											    	<input type="file" class="form-control" id="propertyAddressd" name="image[]">
												</div>
											</div>
											<div class="col-lg-12 col-xl-6"> 
												<div class="my_profile_setting_input form-group">
											    	<label for="propertyAddressd">Image 3 </label>
											    	<input type="file" class="form-control" id="propertyAddressd" name="image[]">
												</div>
											</div>
											<div class="col-lg-12 col-xl-6"> 
												<div class="my_profile_setting_input form-group">
											    	<label for="propertyAddressd">Image 4 </label>
											    	<input type="file" class="form-control" id="propertyAddressd" name="image[]">
												</div>
											</div> 
										</div>

										

										</div>






										<!--
											<div class="col-lg-12"> 
												<div class="my_profile_setting_input form-group">
											    	<label for="propertyAddress">agency_id</label>
											    	<input type="text" class="form-control" id="propertyAddress" name="agency_id">
												</div>
											</div>
										--> 
									</div> 
									<div class="col-12 px-0 row">
										<div class="col-12">
											<button class="btn btn-success py-2 px-5 "> 
												<span class="d-inline-block px-4">Submit</span>
											 </button>
										</div>
									</div> 
								</form>
							</div>


							{{-- <div class="my_dashboard_review mt30">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb30">Location</h4>
										<div class="my_profile_setting_input form-group">
									    	<label for="propertyAddress">Address</label>
									    	<input type="text" class="form-control" id="propertyAddress">
										</div>
									</div>
									<div class="col-lg-6 col-xl-6">
										<div class="my_profile_setting_input form-group">
									    	<label for="propertyState">County / State</label>
									    	<input type="text" class="form-control" id="propertyState">
										</div>
									</div>
									<div class="col-lg-6 col-xl-6">
										<div class="my_profile_setting_input form-group">
									    	<label for="propertyCity">City</label>
									    	<input type="text" class="form-control" id="propertyCity">
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="neighborHood">Neighborhood</label>
									    	<input type="text" class="form-control" id="neighborHood">
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="zipCode">Zip</label>
									    	<input type="text" class="form-control" id="zipCode">
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input ui_kit_select_search form-group">
									    	<label>Country</label>
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Turkey">Turkey</option>
												<option data-tokens="Iran">Iran</option>
												<option data-tokens="Iraq">Iraq</option>
												<option data-tokens="Spain">Spain</option>
												<option data-tokens="Greece">Greece</option>
												<option data-tokens="Portugal">Portugal</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="my_profile_setting_input form-group">
											<div class="h400 bdrs8" id="map-canvas"></div>
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="googleMapLat">Latitude (for Google Maps)</label>
									    	<input type="text" class="form-control" id="googleMapLat">
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="googleMapLong">Longitude (for Google Maps)</label>
									    	<input type="text" class="form-control" id="googleMapLong">
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input ui_kit_select_search form-group">
									    	<label>Google Map Street View</label>
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Turkey">Street View v1</option>
												<option data-tokens="Iran">Street View v2</option>
												<option data-tokens="Iraq">Street View v3</option>
												<option data-tokens="Spain">Street View v4</option>
												<option data-tokens="Greece">Street View v5</option>
												<option data-tokens="Portugal">Street View v6</option>
											</select>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="my_profile_setting_input">
											<button class="btn btn1 float-left">Back</button>
											<button class="btn btn2 float-right">Next</button>
										</div>
									</div>
								</div>
							</div>
							<div class="my_dashboard_review mt30">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb30">Detailed Information</h4>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="propertyId">Property ID</label>
									    	<input type="text" class="form-control" id="propertyId">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="propertyASize">Area Size</label>
									    	<input type="text" class="form-control" id="propertyASize">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="sizePrefix">Size Prefix</label>
									    	<input type="text" class="form-control" id="sizePrefix">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="landArea">Land Area</label>
									    	<input type="text" class="form-control" id="landArea">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="LASPostfix">Land Area Size Postfix</label>
									    	<input type="text" class="form-control" id="LASPostfix">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="bedRooms">Bedrooms</label>
									    	<input type="text" class="form-control" id="bedRooms">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="bathRooms">Bathrooms</label>
									    	<input type="text" class="form-control" id="bathRooms">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="garages">Garages</label>
									    	<input type="text" class="form-control" id="garages">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="garagesSize">Garages Size</label>
									    	<input type="text" class="form-control" id="garagesSize">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="yearBuild">Year Built</label>
									    	<input type="text" class="form-control" id="yearBuild">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="videoUrl">Video URL</label>
									    	<input type="text" class="form-control" id="videoUrl">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="virtualTour">360° Virtual Tour</label>
									    	<input type="text" class="form-control" id="virtualTour">
										</div>
									</div>
							        <div class="col-xl-12">
							        	<h4>Amenities</h4>
							        </div>
							        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
						                <ul class="ui_kit_checkbox selectable-list">
						                	<li>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label" for="customCheck1">Air Conditioning</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck2">
													<label class="custom-control-label" for="customCheck2">Lawn</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck3">
													<label class="custom-control-label" for="customCheck3">Swimming Pool</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck4">
													<label class="custom-control-label" for="customCheck4">Barbeque</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck5">
													<label class="custom-control-label" for="customCheck5">Microwave</label>
												</div>
						                	</li>
						                </ul>
							        </div>
							        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
						                <ul class="ui_kit_checkbox selectable-list">
						                	<li>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck6">
													<label class="custom-control-label" for="customCheck6">TV Cable</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck7">
													<label class="custom-control-label" for="customCheck7">Dryer</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck8">
													<label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck9">
													<label class="custom-control-label" for="customCheck9">Washer</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck10">
													<label class="custom-control-label" for="customCheck10">Gym</label>
												</div>
						                	</li>
						                </ul>
							        </div>
							        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
						                <ul class="ui_kit_checkbox selectable-list">
						                	<li>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck11">
													<label class="custom-control-label" for="customCheck11">Refrigerator</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck12">
													<label class="custom-control-label" for="customCheck12">WiFi</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck13">
													<label class="custom-control-label" for="customCheck13">Laundry</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck14">
													<label class="custom-control-label" for="customCheck14">Sauna</label>
												</div>
						                	</li>
						                	<li>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck15">
													<label class="custom-control-label" for="customCheck15">Window Coverings</label>
												</div>
						                	</li>
						                </ul>
							        </div>
									<div class="col-xl-12">
										<div class="my_profile_setting_input">
											<button class="btn btn1 float-left">Back</button>
											<button class="btn btn2 float-right">Next</button>
										</div>
									</div>
								</div>
							</div>
							<div class="my_dashboard_review mt30">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb30">Property media</h4>
									</div>
									<div class="col-lg-12">
										<ul class="mb0">
											<li class="list-inline-item">
												<div class="portfolio_item">
													<img class="img-fluid" src="images/property/fp1.jpg" alt="fp1.jpg">
								    				<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
												</div>
											</li>
											<li class="list-inline-item">
												<div class="portfolio_item">
													<img class="img-fluid" src="images/property/fp2.jpg" alt="fp2.jpg">
								    				<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
												</div>
											</li>
											<li class="list-inline-item">
												<div class="portfolio_item">
													<img class="img-fluid" src="images/property/fp3.jpg" alt="fp3.jpg">
								    				<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
												</div>
											</li>
										</ul>
									</div>
									<div class="col-lg-12">
										<div class="portfolio_upload">
											<input type="file" name="myfile" />
											<div class="icon"><span class="flaticon-download"></span></div>
											<p>Drag and drop images here</p>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="resume_uploader mb30">
											<h4>Attachments</h4>
											<form class="form-inline">
												<input class="upload-path">
												<label class="upload">
												    <input type="file">
												    Select Attachment
												</label>
											</form>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="my_profile_setting_input">
											<button class="btn btn1 float-left">Back</button>
											<button class="btn btn2 float-right">Next</button>
										</div>
									</div>
								</div>
							</div>
							<div class="my_dashboard_review mt30">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb30">Floor Plans</h4>
										<button class="btn admore_btn mb30">Add More</button>
									</div>
									<div class="col-xl-12">
										<div class="my_profile_setting_input form-group">
									    	<label for="planDsecription">Plan Description</label>
									    	<input type="text" class="form-control" id="planDsecription">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="planBedrooms">Plan Bedrooms</label>
									    	<input type="text" class="form-control" id="planBedrooms">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="planBathrooms">Plan Bathrooms</label>
									    	<input type="text" class="form-control" id="planBathrooms">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="planPrice">Plan Price</label>
									    	<input type="text" class="form-control" id="planPrice">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="planPostfix">Price Postfix</label>
									    	<input type="text" class="form-control" id="planPostfix">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="planSize">Plan Size</label>
									    	<input type="text" class="form-control" id="planSize">
										</div>
									</div>
									<div class="col-lg-6 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label>Plan Image</label>
											<div class="avatar-upload">
										        <div class="avatar-edit">
										            <input class="btn btn-thm" type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
										            <label for="imageUpload"></label>
										        </div>
										        <div class="avatar-preview">
										            <div id="imagePreview"></div>
										        </div>
										    </div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="my_profile_setting_textarea mt30-991">
										    <label for="planDescription">Plan Description</label>
										    <textarea class="form-control" id="planDescription" rows="7"></textarea>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="my_profile_setting_input">
											<button class="btn btn1 float-left">Back</button>
											<button class="btn btn2 float-right">Next</button>
										</div>
									</div>
								</div>
							</div> --}}
						</div>

					</div>
					<div class="row mt50">
						<div class="col-lg-12">
							<div class="copyright-widget text-center">
								<p>© 2020 Find House. Made with love.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection