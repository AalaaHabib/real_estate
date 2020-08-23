@extends('Admin/layout')
@section('content')

	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-sm-12 col-lg-8 col-xl-10 maxw100flex-992">
					<div class="row">
						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-992">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
									<ul id="myDropdown" class="dropdown-content">
										<li><a href="page-dashboard.html"><span class="flaticon-layers"></span> Dashboard</a></li>
										<li><a href="page-message.html"><span class="flaticon-envelope"></span> Message</a></li>
										<li class="active"><a href="page-my-properties.html"><span class="flaticon-home"></span> My Properties</a></li>
										<li><a href="page-my-favorites.html"><span class="flaticon-heart"></span> My Favorites</a></li>
										<li><a href="page-my-savesearch.html"><span class="flaticon-magnifying-glass"></span> Saved Search</a></li>
										<li><a href="page-my-review.html"><span class="flaticon-chat"></span> My Reviews</a></li>
										<li><a href="page-my-packages.html"><span class="flaticon-box"></span> My Package</a></li>
										<li><a href="page-my-profile.html"><span class="flaticon-user"></span> My Profile</a></li>
										<li><a href="page-add-new-property.html"><span class="flaticon-filter-results-button"></span> Add New Listing</a></li>
										<li><a href="page-login.html"><span class="flaticon-logout"></span> Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-xl-4 mb10">
							<div class="breadcrumb_content style2 mb30-991">
								<h2 class="breadcrumb_title">All Properties</h2>
								<p>We are glad to see you again!</p>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div class="my_dashboard_review mb40">
								<div class="property_table">
									<div class="table-responsive mt0">
										<table class="table">
											<thead class="thead-light">
										    	<tr>
										    		<th scope="col">Property Title</th>
										    		<th scope="col">Date published</th>
										    		<th scope="col">Published By</th>
										    		<th scope="col">Action</th>
										    	</tr>
											</thead>
											<tbody>
                                            @foreach($properties as $prop)
										    	<tr>
										    		<th scope="row">
														<div class="feat_property list favorite_page style2">
															<div class="thumb">
																<img class="img-whp" src="{{asset('uploads/properties/'.$prop->main_img)}}" alt="fp1.jpg">
																<div class="thmb_cntnt">
																	<ul class="tag mb0">
																		<li class="list-inline-item dn"></li>
																		<li class="list-inline-item"><a href="#">{{$prop->status}}</a></li>
																	</ul>
																</div>
															</div>
															<div class="details">
																<div class="tc_content">
																	<h4>Renovated Apartment</h4>
																	<p><span class="flaticon-placeholder"></span> <a href="{{route('countryProperty',$prop->country_id)}}"> {{$prop->country['name']}}</a>,{{$prop->city}}, {{$prop->address}}</p>
																	<a class="fp_price text-thm" href="#">${{$prop->price}}</a>
																</div>
															</div>
														</div>
										    		</th>
										    		<td>{{$prop->created_at}}</td>
										    		<td><span class="status_tag badge">{{$prop->user['UserName']}}</span></td>
										    		<td>
										    			<ul class="view_edit_delete_list mb0">
										    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Show"><a href="{{route('adminProp.show',$prop->id)}}"><span class="far fa-eye"></span></a></li>
										    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><a href="{{route('adminProp.delete',$prop->id)}}"><span class="flaticon-garbage"></span></a></li>
										    			</ul>
										    		</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            

										</table>
									</div>
									<div class="mbp_pagination">
                                    <ul class="page_navigation">
								    <li class="page-item">{!! $properties->render() !!}</a></li>
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
    
    
@endsection