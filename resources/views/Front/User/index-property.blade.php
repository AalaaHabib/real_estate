@extends('Front.User.layout.app')
@section('content')
<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid ovh">
			<div class="row">
			 
				<div class="col-lg-12 maxw100flex-992">
					<div class="row">

						@php 
						$properties=\App\Property::where('user_id',\Auth::user()->id)->paginate();
						@endphp
						@foreach($properties as $prop)
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="/uploads/properties/{{$prop->main_img}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
			
										<ul class="tag mb0">

											<li class="list-inline-item captalize"><a href="#">For {{$prop->status}}</a></li>
											@if($prop->is_feature==1)
											<li class="list-inline-item"><a href="#">Featured</a></li>
													
											@endif
										</ul>
										<ul class="icon mb0">
										<li class="list-inline-item"><a href="{{route('singleProperty',[$prop->country['id'],$prop->id])}}"><span class=" ">look</span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">${{$prop->price}}</a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
									<a href="{{route('catProp',$prop->category_id)}}">	<p class="text-thm">{{$prop->category['name']}}</p></a>
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