
@extends('Admin/layout')
@section('content')
<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-lg-9 col-xl-10 maxw100flex-992">
					<div class="row">
						<div class="col-lg-12 mb10">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">Mange All types of agents which Enter the website</h2>
								<p>All Details tou need About your site.</p>
							</div>
						</div>
                        <div class="col-lg-12 mb10">
					<div class="row">
                        @foreach($companies as $company)
						<div class="col-md-4 col-lg-4">
							<div class="feat_property home7 company">
								<div class="thumb">
									<img class="w-100" src="{{asset('Front/images/agency/'.$company->img)}}" alt="1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item dn"></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<h4>{{$company->name}}</h4>
										<p class="text-thm">Company</p>
										<ul class="prop_details mb0">
											<li><a href="#">Office: {{$company->taxNumber}}</a></li>
											<li><a href="#">Mobile: {{$company->phone}}</a></li>
											<li><a href="#">Fax: {{$company->faxNumber}}</a></li>
											<li><a href="#">Email: <span class="__cf_email__" data-cfemail="b8c8d9d3cdd4d4d9f8ded1d6dcd0d7cdcbdd96dbd7d5">{{$company->email}}</span></a></li>
                                            <a href="{{route('admin.users.destroy',$company->id)}}" class="btn btn-danger float-right ">Destroy</a>
                                        </ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta d-flex justify-content-around">
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fab fa-google"></i></a></li>
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
		</div>
</section>

@endsection



	