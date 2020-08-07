@extends('Front/layout')<!--Page title-->
@section('title')
Properties
@endsection

@section('content')
	<!-- Listing Grid View -->
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
						<span class="text-bold ">Home / </span>
						<span class="text-primary">{{$cat_name['name']}}</span>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="feature_property_slider">
						@foreach($properties as $prop)
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{asset('uploads/properties/'.$prop->main_img)}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
			
										<ul class="tag mb0">

											<li class="list-inline-item captalize"><a href="#">For {{$prop->status}}</a></li>
											@if($prop->is_feature==1)
											<li class="list-inline-item"><a href="#">Featured</a></li>
													
											@endif
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">${{$prop->price}}</a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">{{$prop->category['name']}}</p>
										<h4>{{$prop->small_desc}}</h4>
										<p><span class="flaticon-placeholder"></span> {{$prop->country['name']}},{{$prop->city}}, {{$prop->address}}</p>
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
					<div class="col-lg-12 mt20">
							<div class="mbp_pagination">
								<ul class="page_navigation">
								    <li class="page-item">{!! $properties->render() !!}</a></li>
								</ul>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>
    
    @endsection