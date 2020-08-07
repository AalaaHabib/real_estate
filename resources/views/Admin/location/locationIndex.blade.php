@extends('Admin/layout')

@section('title')
City
@endsection

@section('content')
	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-sm-12 col-lg-8 col-xl-10 maxw100flex-992">
					<div class="row">
						<div class="col-lg-4 col-xl-4 mb10">
							<div class="breadcrumb_content style2 mb30-991">
								<h2 class="breadcrumb_title">Cities</h2>
								<p>We are glad to see you again!</p>
							</div>
						</div>
						<div class="col-lg-8 col-xl-8">
							<div class="candidate_revew_select style2 text-right mb30-991">
								<ul class="mb0">
									<li class="list-inline-item">
                                        <a href="{{route('adminLocations.create')}}"> <button class="btn  my-2 my-sm-0 btn-info" >Add New City</button></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="my_dashboard_review mb40">
								<div class="favorite_item_list">
                                    @foreach($locations as $loc)
									<div class="feat_property list favorite_page">
										<div class="thumb">
											<img class="img-whp" src="{{asset('uploads/cities/'.$loc->img)}}" alt="fp1.jpg">
											<div class="thmb_cntnt">
												<ul class="tag mb0">
													<li class="list-inline-item dn"></li>
												</ul>
											</div>
										</div>
										<div class="details">
											<div class="tc_content pt-5">
												<h4>{{$loc->name}}</h4>
											</div>
										</div>
						    			<ul class="view_edit_delete_list mb0 mt35">
                                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><a href="{{ url('dashboard/cities/edit/'.$loc->id) }}"><span class="flaticon-edit"></span></a></li>
						    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><a href="{{ url('dashboard/cities/delete/'.$loc->id) }}"><span class="flaticon-garbage"></span></a></li>
						    			</ul>
									</div>
                                    @endforeach
									<div class="mbp_pagination">
										<ul class="page_navigation">
                                            <li class="page-item">{!! $locations->render() !!}</a></li>
										</ul>
									</div>
                                </div>
                         
							</div>
						</div>
					</div>
					<div class="row mt10">
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