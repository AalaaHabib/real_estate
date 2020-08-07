@extends('Front/layout')<!--Page title-->
@section('title')
Properties
@endsection

@section('content')

	<div class="single_page_listing_style">
		<div class="container-fluid p0">
			<div class="row">
				<div class="col-sm-6 col-lg-6 p0">
					<div class="row m0">
						<div class="col-lg-12 p0">
							<div class="spls_style_one pr1 1px">
								<img class="img-fluid w100" src="{{asset('uploads/properties/'.$firstPic->img)}}" alt="ls1.jpg">
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-6 p0">
					<div class="row m0">
					@foreach($fourPic as $pic)
						<div class="col-sm-6 col-lg-6 p0">
							<div class="spls_style_one">
								<a class="popup-img" href="images/property/ls2.jpg"><img src="{{asset('uploads/properties/'.$pic->img)}}" alt="ls2.jpg"></a>
							</div>
						</div>
					@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="p0">
		<div class="container">
			<div class="row listing_single_row">
				<div class="col-sm-6 col-lg-7 col-xl-8">
					<div class="single_property_title">
						<a href="images/property/ls1.jpg" class="upload_btn popup-img"><span class="flaticon-photo-camera"></span> View Photos</a>
					</div>
				</div>
				<div class="col-sm-6 col-lg-5 col-xl-4">
					<div class="single_property_social_share">
						<div class="spss style2 mt10 text-right tal-400">
							<ul class="mb0">
								<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="flaticon-share"></span></a></li>
								<li class="list-inline-item"><a href="#"><span class="flaticon-printer"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Agent Single Grid View -->
	<section class="our-agent-single bgc-f7 pb30-991">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="listing_sidebar dn db-991">
						<div class="sidebar_content_details style3">
							<!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
							<div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
								<div class="sidebar_advanced_search_widget">
									<h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right" href="#"><small>Hide Filter</small> <span class="flaticon-close"></span></a></h4>
									<ul class="sasw_list style2 mb0">
										<li class="search_area">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName1" placeholder="keyword">
										    	<label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
										    </div>
										</li>
										<li class="search_area">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
										    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
										    </div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Status</option>
														<option>Apartment</option>
														<option>Bungalow</option>
														<option>Condo</option>
														<option>House</option>
														<option>Land</option>
														<option>Single Family</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Property Type</option>
														<option>Apartment</option>
														<option>Bungalow</option>
														<option>Condo</option>
														<option>House</option>
														<option>Land</option>
														<option>Single Family</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="small_dropdown2">
											    <div id="prncgs" class="btn dd_btn">
											    	<span>Price</span>
											    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
											    </div>
											  	<div class="dd_content2">
												    <div class="pricing_acontent">
														<input type="text" class="amount" placeholder="$52,239"> 
														<input type="text" class="amount2" placeholder="$985,14">
														<div class="slider-range"></div>
												    </div>
											  	</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Bathrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Bedrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Garages</option>
														<option>Yes</option>
														<option>No</option>
														<option>Others</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Year built</option>
														<option>2013</option>
														<option>2014</option>
														<option>2015</option>
														<option>2016</option>
														<option>2017</option>
														<option>2018</option>
														<option>2019</option>
														<option>2020</option>
													</select>
												</div>
											</div>
										</li>
										<li class="min_area style2 list-inline-item">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName2" placeholder="Min Area">
										    </div>
										</li>
										<li class="max_area list-inline-item">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName3" placeholder="Max Area">
										    </div>
										</li>
										<li>
										  	<div id="accordion" class="panel-group">
											    <div class="panel">
											      	<div class="panel-heading">
												      	<h4 class="panel-title">
												        	<a href="#panelBodyRating" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion"><i class="flaticon-more"></i> Advanced features</a>
												        </h4>
											      	</div>
												    <div id="panelBodyRating" class="panel-collapse collapse">
												        <div class="panel-body row">
												      		<div class="col-lg-12">
												                <ul class="ui_kit_checkbox selectable-list float-left fn-400">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck1">
																			<label class="custom-control-label" for="customCheck1">Air Conditioning</label>
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
																			<input type="checkbox" class="custom-control-input" id="customCheck10">
																			<label class="custom-control-label" for="customCheck10">Gym</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck5">
																			<label class="custom-control-label" for="customCheck5">Microwave</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck6">
																			<label class="custom-control-label" for="customCheck6">TV Cable</label>
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
																			<input type="checkbox" class="custom-control-input" id="customCheck11">
																			<label class="custom-control-label" for="customCheck11">Refrigerator</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck3">
																			<label class="custom-control-label" for="customCheck3">Swimming Pool</label>
																		</div>
												                	</li>
												                </ul>
												                <ul class="ui_kit_checkbox selectable-list float-right fn-400">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck12">
																			<label class="custom-control-label" for="customCheck12">WiFi</label>
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
																			<input type="checkbox" class="custom-control-input" id="customCheck7">
																			<label class="custom-control-label" for="customCheck7">Dryer</label>
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
																			<input type="checkbox" class="custom-control-input" id="customCheck13">
																			<label class="custom-control-label" for="customCheck13">Laundry</label>
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
																			<input type="checkbox" class="custom-control-input" id="customCheck15">
																			<label class="custom-control-label" for="customCheck15">Window Coverings</label>
																		</div>
												                	</li>
												                </ul>
													        </div>
												        </div>
												    </div>
											    </div>
											</div>
										</li>
										<li>
											<div class="search_option_button">
											    <button type="submit" class="btn btn-block btn-thm">Search</button>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="sidebar_switch dn db-991 mb30 mb0-767">
						<div id="main2">
							<span id="open2" class="flaticon-filter-results-button filter_open_btn style3"> Show Filter</span>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-8 mt50">
					<div class="row">
						<div class="col-lg-12">
							<div class="listing_single_description2 mt30-767 mb30-767">
								<div class="single_property_title">
									<h2>{{$property->title}}</h2>
									<p><a href="{{route('countryProperty',$property->country_id)}}"> {{$property->country['name']}}</a> , {{$property->address}}</p>
								</div>
								<div class="single_property_social_share style2">
									<div class="price">
										<h2>${{$property->price}}</h2>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="listing_single_description style2">
								<div class="lsd_list">
									<ul class="mb0">
										<li class="list-inline-item"><a href="#">{{$property->category['name']}}</a></li>
										<li class="list-inline-item"><a href="#">Rooms: {{$property->Room_num}}</a></li>
										<li class="list-inline-item"><a href="#">Baths: {{$property->bathRoom_num}}</a></li>
										<li class="list-inline-item"><a href="#">size: {{$property->size}}</a></li>
									</ul>
								</div>
								<p>{{\Illuminate\Support\Str::limit($property->desc,200,'...')}}<p>
								<h4 class="mb30">All Description</h4>
								
						    	<p class="gpara second_para white_goverlay mt10 mb10"></p>
								<div class="collapse" id="collapseExample">
								  	<div class="card card-body">
								    	<p class="mt10 mb10">{{$property->desc}}</p>
								  	</div>
								</div>
								<p class="overlay_close">
									<a class="text-thm fz14" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
								   	 Show More <span class="flaticon-download-1 fz12"></span>
								  	</a>
								</p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="additional_details">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb15">Property Details</h4>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<ul class="list-inline-item">
											<li><p>Price :</p></a></li>
											<li><p>Size :</p></a></li>
											<li><p>Date :</p></a></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>${{$property->price}}</span></p></a></li>
											<li><p><span>{{$property->size}}</span></p></a></li>
											<li><p><span>{{$property->created_at}}</span></p></a></li>
										</ul>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<ul class="list-inline-item">
											<li><p>Bedrooms :</p></a></li>
											<li><p>Bathrooms :</p></a></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>{{$property->Room_num}}</span></p></a></li>
											<li><p><span>{{$property->bathRoom_num}}</span></p></a></li>				
										</ul>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<ul class="list-inline-item">
											<li><p>Property Type :</p></a></li>
											<li><p>Property Status :</p></a></li>
										</ul>
										<ul class="list-inline-item">
											<li><p><span>{{$property->category['name']}}</span></p></a></li>
											<li><p><span>For {{$property->status}}</span></p></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					
						<div class="col-lg-12">
							<div class="application_statics mt30">
								<h4 class="mb30">Location <small class="float-right">{{$property->city}} , {{$property->address}}</small></h4>
								<div class="property_video p0">
									<div class="thumb">
										<div class="h400" id="map-canvas"></div>
										<div class="overlay_icon">
											<a href="#"><img class="map_img_icon" src="{{asset('Front/images')}}/header-logo.png" alt="header-logo.png"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xl-4 mt50">
					<div class="sidebar_listing_grid1 dn-991">
						<div class="terms_condition_widget">
							<h4 class="title">Categories Property</h4>
							<div class="widget_list">
								<ul class="list_details">
                                    @foreach($categories as $cat)
									<li><a href="{{route('catProp',$cat->id)}}"><i class="fa fa-caret-right mr10"></i>{{$cat->name}} </a></li>
									@endforeach
								</ul>
							</div>
						</div>
						
						<div class="terms_condition_widget">
							<h4 class="title">Featured Properties</h4>
							<div class="sidebar_feature_property_slider">
                                @foreach($featured_prop as $featProp)
								<div class="item">
									<div class="feat_property home7 agent">
										<div class="thumb">
											<img class="img-fluid" src="{{asset('uploads/properties/'.$featProp->main_img)}}" alt="fp1.jpg">
											<div class="thmb_cntnt">
												<ul class="tag mb0">
													<li class="list-inline-item"><a href="#">For {{$featProp->status}}</a></li>
													<li class="list-inline-item"><a href="#">Featured</a></li>
												</ul>
												<a class="fp_price" href="#">${{$featProp->price}}</a>
												<h4 class="posr color-white"><a href="{{route('catProp',$featProp->category_id)}}">{{$featProp->category['name']}}</a></h4>
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