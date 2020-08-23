@extends('Admin/layout')

@section('title')
Category
@endsection

@section('content')
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
										<li><a href="page-my-properties.html"><span class="flaticon-home"></span> My Properties</a></li>
										<li><a href="page-my-favorites.html"><span class="flaticon-heart"></span> My Favorites</a></li>
										<li class="active"><a href="page-my-savesearch.html"><span class="flaticon-magnifying-glass"></span> Saved Search</a></li>
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
								<h2 class="breadcrumb_title">All categories </h2>
								<p>We are glad to show categories for you!</p>
							</div>
						</div>
						<div class="col-lg-8 col-xl-8">
							<div class="candidate_revew_select style2 text-right mb30-991">
								<ul class="mb0">
								<li class="list-inline-item">
                                        <a href="{{route('adminCats.create')}}"> <button class="btn py-2  my-4 my-sm-0 btn-outline-danger" >Add New Category</button></a>
									</li>
									
								</ul>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="my_dashboard_review mb40">
								<div class="col-lg-12">
									<div class="savesearched_table">
										<div class="table-responsive mt0">
											<table class="table">
												<thead class="thead-light">
											    	<tr>
                                                        <th scope="col">id</th>
                                                        <th class="dn-lg" scope="col"></th>
                                                        <th class="dn-lg" scope="col"></th>
                                                        <th scope="col">name</th>
                                                        <th scope="col"></th>
											    		<th scope="col"></th>
											    		<th scope="col">Action</th>
											    	</tr>
												</thead>
												<tbody>
                                                    @foreach($cats as $cat)
											    	<tr>
                                                        <th class="title" scope="row">{{$loop->iteration}}</th>
                                                        <td class="dn-lg"></td>
											    		<td class="dn-lg"></td>
                                                        <td class="para">{{$cat->name}}</td>
											    		<td></td>
											    		<td></td>
											    		<td>
											    			<ul class="view_edit_delete_list mb0">

											    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><a href="{{url('/dashboard/cats/edit',$cat->id)}}"><span class="flaticon-edit"></span></a></li>
											    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><a href="{{url('/dashboard/cats/delete',$cat->id)}}"><span class="flaticon-garbage"></span></a></li>
											    			</ul>
											    		</td>
                                                    </tr>
                                                    @endforeach
												</tbody>
											</table>
										</div>
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