@extends('Admin/layout')
@section('content')

<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-sm-12 col-lg-8 col-xl-10 maxw100flex-992">
					<div class="row">
					<div class="col-md-12 col-lg-12 mt50">
					<div class="row">
						<div class="col-lg-12">
							<div class="listing_single_description2 mt30-767 mb30-767">
								<div class="single_property_title">
									<h2>{{$property->title}}</h2>
									<p><a href="{{route('countryProperty',$property->country_id)}}"> {{$property->country['name']}}</a> , {{$property->address}}</p>
								</div>
								<div class="single_property_social_share style2">
									<div class="price">
										<h2$>{{$property->price}}</h2>
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
		
					</div>
				</div>
                    </div>
				</div>
			</div>
		</div>
	</section>

@endsection