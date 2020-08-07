@extends('Front/layout')<!--Page title-->
@section('title')
Contact
@endsection

@section('content')

<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Contact</li>
						</ol>
						<h4 class="breadcrumb_title">Contact Us</h4>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Contact -->
	<section class="our-contact pb0 bgc-f7">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-xl-8">
					<div class="form_grid">
						<h4 class="mb5">Send Us An Email</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida quis libero eleifend ornare. Maecenas mattis enim at arcu feugiat, sit amet blandit nisl iaculis. Donec lacus odio, malesuada eu libero sit amet, congue aliquam leo. In hac habitasse platea dictumst.</p>
			           @include('Front/includes/errors')
					    <form class="contact_form" id="contact_form" name="contact_form" action="{{route('sendMessage')}}" method="post">
							@csrf
							<div class="row">
				                <div class="col-md-6">
				                    <div class="form-group">
										<input id="form_name" name="name" class="form-control" required="required" type="text" placeholder="Name">
									</div>
				                </div>
				                <div class="col-md-6">
				                    <div class="form-group">
				                    	<input id="form_email" name="email" class="form-control required email" required="required" type="email" placeholder="Email">
				                    </div>
				                </div>
				                <div class="col-md-6">
				                    <div class="form-group">
				                    	<input id="form_phone" name="phone" class="form-control required phone" required="required" type="phone" placeholder="Phone">
				                    </div>
				                </div>
				                <div class="col-md-6">
				                    <div class="form-group">
					                    <input id="form_subject" name="title" class="form-control required" required="required" type="text" placeholder="Subject">
									</div>
				                </div>
				                <div class="col-sm-12">
		                            <div class="form-group">
		                                <textarea id="form_message" name="message" class="form-control required" rows="8" required="required" placeholder="Your Message"></textarea>
		                            </div>
				                    <div class="form-group mb0">
					                    <button type="submit" class="btn btn-lg btn-thm">Send Message</button>
				                    </div>
				                </div>
			                </div>
			            </form>
					</div>
				</div>
				<div class="col-lg-5 col-xl-4">
					<div class="contact_localtion">
						<h4>Contact Us</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida quis libero eleifend ornare. habitasse platea dictumst.</p>
						<div class="content_list">
							<h5>Address</h5>
							<p>{{$sett->address}}, {{$sett->city}}</p>
						</div>
						<div class="content_list">
							<h5>Phone</h5>
							<p>{{$sett->phone}}</p>
						</div>
						<div class="content_list">
							<h5>Mail</h5>
							<p><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="afc6c1c9c0efc9c6c1cbc7c0dadcca81ccc0c2">{{$sett->email}}</a></p>
						</div>
						<div class="content_list">
							<h5>Working Hours</h5>
							<p>{{$sett->works_hour}}</p>
						</div>
                        <h5>Follow Us</h5>
                        <ul class="contact_form_social_area">
							<li class="list-inline-item"><a href="{{$sett->fb}}"><i class="fa fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href="{{$sett->tiwitter}}"><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="{{$sett->insta}}"><i class="fa fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="{{$sett->prinst}}"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid p0 mt50">
			<div class="row">
				<div class="col-lg-12 py-4">
					{!! $sett->map!!}
				</div>
			</div>
		</div>
	</section>

	<!-- Start Partners -->
	<section class="start-partners bgc-thm pt50 pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="start_partner tac-smd">
						<h2>Become a Real Estate Agent</h2>
						<p>We only work with the best companies around the globe</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="parner_reg_btn text-right tac-smd">
						<a class="btn btn-thm2" href="#">Register Now</a>
					</div>
				</div>
			</div>
		</div>
    </section>
    
    @endsection