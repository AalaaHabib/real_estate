@extends('Admin/layout')


@section('content')

<!-- Our Dashbord -->
<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-lg-9 col-xl-10 maxw100flex-992">
					<div class="row">
						<div class="col-lg-12 mb10 text-center">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">Message</h2>
								<p>We are glad to see you again!</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="offset-2 col-lg-8 col-xl-8">
							<div class="message_container text-center">
								<div class="inbox_user_list">
								
									<ul>
                                        @foreach($messages as $mess)
										<li class="contact">
											<a href="#">
												<div class="wrap">
													<div class="row">
														<div class="col-3">
														<a class="btn btn-info px-3 py-1 mb-3" href="{{route('admin.showMess',$mess->id)}}">{{$loop->iteration}}</a>											
													</div>
													<div class="col-5">
														<h5 class="name">{{$mess->name}}</h5>
													</div>
													<div class="col-4">							
														<p class="preview">{{$mess->title}}</p>
													</div>
													</div>
												</div>
											</a>
										</li>
										<hr>
                                        @endforeach
									</ul>
								</div>
							</div>
						</div>
					
					</div>
					<div class="row mt50">
						<div class="col-lg-12">
							<div class="copyright-widget text-center">
								<p>© 2020 3KAR.com. Made with love.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    

@endsection