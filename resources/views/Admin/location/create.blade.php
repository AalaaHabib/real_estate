@extends('Admin/layout')

@section('title')
Create new City
@endsection

@section('content')

<!-- Our Dashbord -->
<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid ovh">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-lg-9 col-xl-10 maxw100flex-992">
					<div class="row">
						<div class="col-lg-12 mb10">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">Add New City</h2>
                                <p>We are glad to see you again!</p>
                                @include('Admin.inc.errors')
							</div>
						</div>
						<div class="col-lg-12">
							<div class="my_dashboard_review">
                            <form method="post" action="{{route('adminLocations.store')}}"enctype= multipart/form-data >
                                @csrf
								<div class="row">
									<div class="col-lg-12">
                                        <h4 class="mb30">Create City</h4>
                                       
										<div class="my_profile_setting_input form-group">
									    	<label for="propertyTitle">City name</label>
									    	<input type="text" name="name" class="form-control" id="propertyTitle">
										</div>
										<div class="my_profile_setting_input form-group">
									    	<label for="propertyTitle">City Image</label>
									    	<input type="file" name="img" class="form-control-file" id="propertyTitle">
										</div>
									</div>
			
									<div class="col-xl-12">
										<div class="my_profile_setting_input">
										<a href="{{route('adminCats.index')}}">	<butaton class="btn btn1 float-left" >Back</button></a>
										<a>	<button class="btn btn2 float-right" type="submit" >Create</button></a>
										</div>
                                    </div>
                                    </div>
                                </form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>

@endsection