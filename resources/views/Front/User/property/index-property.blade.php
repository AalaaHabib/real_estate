@extends('Front.User.layout.app')
<!--Page title-->
@section('title')
index Property
@endsection
@section('header')
<div class="col-12 px-0">
    <div class="p-3 row">
        @php
        $properties=\App\Property::where('user_id',\Auth::user()->id)->paginate();
        @endphp
        @foreach($properties as $prop)
        <div class="col-12 col-sm-6 col-lg-6 row"> 
                <div class="col-12 px-0" style="cursor: pointer;" onclick="window.location.href='/property/{{$prop->id}}'">
                    <div class="feat_property col-12 px-0">
                        <div class="thumb">
                            <img class="img-whp" src="/storage/uploads/properties/{{$prop->main_img}}" alt="fp1.jpg">
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
                                <a href="{{route('catProp',$prop->category_id)}}">
                                    <p class="text-thm">{{$prop->category['name']}}</p>
                                </a>
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
                                    <li class="list-inline-item "><a href="#"><img class="custom" src="{{$prop->user->getUserAvatar()}}" style="width: 30px;height: 30px;border-radius: 50%"></a></li>
                                    <li class="list-inline-item  "><a href="#">{{$prop->user['UserName']}}</a></li>
                                    <li class="list-inline-item ">{{$prop->updated_at}}</li>
                                </ul>
                            </div>
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
@endsection
