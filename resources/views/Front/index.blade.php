@extends('Front/layout')<!--Page title-->
@section('title')
Home Page
@endsection

@section('content')

@php
	$cats=\App\Ctegory::select('id','name')->get();
	$cities=\App\Counrty::select('id','name')->get();
@endphp
	<!-- Home Design -->
	<section class="home-one home1-overlay home1_bgi1">
		<div class="container">
			<div class="row posr">
				<div class="col-lg-12">
					<div class="home_content">
						<div class="home-text text-center">
							<h2 class="fz55">{{json_decode($banner_conent->content)->title}}</h2>
							<p class="fz18 color-white">{{json_decode($banner_conent->content)->sub_title}}</p>
						</div>
						<div class="home_adv_srch_opt">
							<ul class="nav nav-pills" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Buy</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Rent</a>
								</li>
							</ul>
							<div class="tab-content home1_adsrchfrm" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
									<div class="home1-advnc-search">
									<form action="{{route('searchHandle')}}" method="post">
									@csrf
										<ul class="h1ads_1st_list mb0">
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Enter keyword...">
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_two">
													<div class="candidate_revew_select">
														<select class="selectpicker w100 show-tick" name="category_id">
														@foreach($cats as $cat)
															<option value="{{$cat->id}}">{{$cat->name}}</option>
														@endforeach
														</select>
													</div>
												</div>
											</li>
											<li class="list-inline-item">
											    <div class="form-group">
												<select class="selectpicker w100 show-tick" name="country_id">
													@foreach($cities as $city)
														<option value="{{$city->id}}">{{$city->name}}</option>
													@endforeach
												</select>											 
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="small_dropdown2">
												    <div id="prncgs" class="btn dd_btn">
												    	<span>Price</span>
												    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
												    </div>
												  	<div class="dd_content2">
													    <div class="pricing_acontent">
															<input type="text" class="amount"  name="minPrice" placeholder="$52,239"> 
															<input type="text" class="amount2"  name="maxPrice" placeholder="$985,14">
															<div class="slider-range"></div>
													    </div>
												  	</div>
												</div>
											</li>
										
											<li class="list-inline-item">
												<div class="search_option_button">
												    <button type="submit" class="btn btn-thm ">Search</button>
												</div>
											</li>
										</ul>
									</form>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
									<div class="home1-advnc-search">
										<ul class="h1ads_1st_list mb0">
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputName2" placeholder="Enter keyword...">
											    </div>
											</li>
											<li class="list-inline-item">
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
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputEmail3" placeholder="Location">
											    	<label for="exampleInputEmail3"><span class="flaticon-maps-and-flags"></span></label>
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="small_dropdown2">
												    <div id="prncgs2" class="btn dd_btn">
												    	<span>Price</span>
												    	<label for="exampleInputEmail4"><span class="fa fa-angle-down"></span></label>
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
											<li class="custome_fields_520 list-inline-item">
												<div class="navbered">
												  	<div class="mega-dropdown">
													    <span id="show_advbtn2" class="dropbtn">Advanced <i class="flaticon-more pl10 flr-520"></i></span>
													    <div class="dropdown-content">
													      	<div class="row p15">
													      		<div class="col-lg-12">
													      			<h4 class="text-thm3">Amenities</h4>
													      		</div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck16">
																				<label class="custom-control-label" for="customCheck16">Air Conditioning</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck17">
																				<label class="custom-control-label" for="customCheck17">Lawn</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck18">
																				<label class="custom-control-label" for="customCheck18">Swimming Pool</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck19">
																				<label class="custom-control-label" for="customCheck19">Barbeque</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck20">
																				<label class="custom-control-label" for="customCheck20">Microwave</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck21">
																				<label class="custom-control-label" for="customCheck21">TV Cable</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck22">
																				<label class="custom-control-label" for="customCheck22">Dryer</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck23">
																				<label class="custom-control-label" for="customCheck23">Outdoor Shower</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck24">
																				<label class="custom-control-label" for="customCheck24">Washer</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck25">
																				<label class="custom-control-label" for="customCheck25">Gym</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck26">
																				<label class="custom-control-label" for="customCheck26">Refrigerator</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck27">
																				<label class="custom-control-label" for="customCheck27">WiFi</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck28">
																				<label class="custom-control-label" for="customCheck28">Laundry</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck29">
																				<label class="custom-control-label" for="customCheck29">Sauna</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck30">
																				<label class="custom-control-label" for="customCheck30">Window Coverings</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
													      	</div>
													      	<div class="row p15 pt0-xsd">
													      		<div class="col-lg-11 col-xl-10">
													      			<ul class="apeartment_area_list mb0">
													      				<li class="list-inline-item">
																			<div class="candidate_revew_select">
																				<select class="selectpicker w100 show-tick">
																					<option>Bathrooms</option>
																					<option>1</option>
																					<option>2</option>
																					<option>3</option>
																					<option>4</option>
																					<option>5</option>
																					<option>6</option>
																					<option>7</option>
																					<option>8</option>
																				</select>
																			</div>
													      				</li>
													      				<li class="list-inline-item">
																			<div class="candidate_revew_select">
																				<select class="selectpicker w100 show-tick">
																					<option>Bedrooms</option>
																					<option>1</option>
																					<option>2</option>
																					<option>3</option>
																					<option>4</option>
																					<option>5</option>
																					<option>6</option>
																					<option>7</option>
																					<option>8</option>
																				</select>
																			</div>
													      				</li>
													      				<li class="list-inline-item">
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
													      				</li>
													      				<li class="list-inline-item">
																			<div class="candidate_revew_select">
																				<select class="selectpicker w100 show-tick">
																					<option>Built-up Area</option>
																					<option>Adana</option>
																					<option>Ankara</option>
																					<option>Antalya</option>
																					<option>Bursa</option>
																					<option>Bodrum</option>
																					<option>Gaziantep</option>
																					<option>İstanbul</option>
																					<option>İzmir</option>
																					<option>Konya</option>
																				</select>
																			</div>
													      				</li>
													      			</ul>
													      		</div>
													      		<div class="col-lg-1 col-xl-2">
													      			<div class="mega_dropdown_content_closer">
														      			<h5 class="text-thm text-right mt15"><span id="hide_advbtn2" class="curp">Hide</span></h5>
													      			</div>
													      		</div>
													      	</div>
													    </div>
													</div>
												</div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_button">
												    <button type="submit" class="btn btn-thm">Search</button>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Feature Properties -->
	<section id="feature-property" class="feature-property bgc-f7">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a href="#feature-property">
				    	<div class="mouse_scroll">
			        		<div class="icon">
					    		<h4>Scroll Down</h4>
					    		<p>to discover more</p>
			        		</div>
			        		<div class="thumb">
			        			<img src="{{asset('Front/images')}}/resource/mouse.png" alt="mouse.png">
			        		</div>
				    	</div>
				    </a>
				</div>
			</div>
		</div>
		<div class="container ovh">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center mb40">
						<h2>{{json_decode($Featured_conent->content)->title}} </h2>
						<p>{{json_decode($Featured_conent->content)->sub_title}}</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="feature_property_slider">
						@foreach($properties as $prop)
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
		
									<img class="img-whp"  src="{{asset('uploads/properties/'.$prop->main_img)}}" alt="fp1.jpg">
						
									<div class="thmb_cntnt">
			
										<ul class="tag mb0">

											<li class="list-inline-item captalize"><a href="#">For {{$prop->status}}</a></li>
											@if($prop->is_feature==1)
											<li class="list-inline-item"><a href="#">Featured</a></li>
													
											@endif
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><span class="flaticon-heart"></span></a></li>
											<li class="list-inline-item"><a href="{{route('singleProperty',[$prop->country['id'],$prop->id])}}"><span class=" ">look</span></a></li>
										</ul>
										<a class="fp_price" href="#">${{$prop->price}}</a>
									</div>
								</div>			
								<div class="details">
									<div class="tc_content">
										<a href="{{route('catProp',$prop->category_id)}}" ><p class="text-thm">{{$prop->category['name']}}</p></a>
										<h4>{{$prop->small_desc}}</h4>
										<p><span class="flaticon-placeholder"></span><a href="{{route('countryProperty',$prop->country_id)}}"> {{$prop->country['name']}}</a>,{{$prop->city}}, {{$prop->address}}</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item "><a href="#">Beds: {{$prop->Room_num}}</a></li>
											<li class="list-inline-item"><a href="#">Baths: {{$prop->bathRoom_num}}</a></li>
											<li class="list-inline-item"><a href="#">Price: ${{$prop->price}}</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta d-flex mb0">
											<li class="list-inline-item "><a href="#"><img  class="custom" src="{{asset('uploads/users/'.$prop->user['img'])}}" alt="pposter1.png"></a></li>
											<li class="list-inline-item  "><a href="#">{{$prop->user['UserName']}}</a></li>
											<li class="list-inline-item ">{{$prop->updated_at}}</li>
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
	</section>

		<!-- Property Cities -->
		<section id="property-city" class="property-city pb30">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="main-title text-center">
							<h2>{{json_decode($Cities_conent->content)->title}}</h2>
							<p>{{json_decode($Cities_conent->content)->sub_title}}</p>
						</div>
					</div>
				</div>
				<div class="row">
				
				@foreach($countries as $loc)
					<div  class=" @if($loc->name == 'cairo'|| $loc->name=='Giza') col-8 @else col-4 @endif">
						<div class="properti_city">
							<div class="thumb  w-100 ">
							<a href="{{route('countryProperty',$loc->id)}}">
								<img class="img-fluid" src="{{asset('Front/images/property/'.$loc->img)}}" alt="pc1.jpg"></div>
							</a>
							<div class="overlay">
								<div class="details">
									<h4>{{$loc->name}}</h4>
									<p>@if($loc->name=='cairo') {{$count_cairo}} Properties 
										@elseif($loc->name=='Alex') {{$count_alex}} Properties
										@elseif($loc->name=='Giza')  {{$count_giza}} Properties
										@else {{$count_bns}} Properties @endif</p>

								</div>
							</div>
						</div>
					</div>
				@endforeach
				</div>
			</div>
		</section>

	<!-- Why Chose Us -->
	<section id="why-chose" class="whychose_us bgc-f7 pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>{{json_decode($why_us_conent->content)->title}}</h2>
						<p>{{json_decode($why_us_conent->content)->sub_title}}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-high-five"></span>
						</div>
						<div class="details">
							<h4>Trusted By Thousands</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-home-1"></span>
						</div>
						<div class="details">
							<h4>Wide Renge Of Properties</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-profit"></span>
						</div>
						<div class="details">
							<h4>Financing Made Easy</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Testimonials -->
	<section id="our-testimonials" class="our-testimonial">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2 class="color-white">{{json_decode($testi_conent->content)->title}}</h2>
						<p class="color-white">{{json_decode($testi_conent->content)->sub_title}}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="testimonial_grid_slider">
						@foreach($testimonials as $test)
						<div class="item">
							<div class="testimonial_grid">
								<div class="thumb">
									<img src="{{asset('uploads/testimonial/'.$test->user['img'])}}" alt="1.jpg">
								</div>
								<div class="details">
									<h4>{{$test->User['UserName']}}</h4>
									<p>{{$test->User['postion']}}</p>
									<p class="mt25">{{$test->desc}}</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Partners -->
	<section id="our-partners" class="our-partners">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>{{json_decode($Partner_conent->content)->title}}</h2>
						<p>{{json_decode($Partner_conent->content)->sub_title}}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="{{asset('Front/images')}}/partners/1.png" alt="1.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="{{asset('Front/images')}}/partners/2.png" alt="2.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="{{asset('Front/images')}}/partners/3.png" alt="3.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="{{asset('Front/images')}}/partners/4.png" alt="4.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="{{asset('Front/images')}}/partners/5.png" alt="5.png">
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
						<h2>{{json_decode($registerFooter_conent->content)->title}}</h2>
						<p>{{json_decode($registerFooter_conent->content)->sub_title}}</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="parner_reg_btn text-right tac-smd">
						<a class="btn btn-thm2" href="{{route('user.register')}}">Register Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>



@endsection
