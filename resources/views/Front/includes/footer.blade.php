@php 
$footer_content=\App\SiteContent::select('content')->where('name','=','footer')->first();
$sett=\App\Setting::first(); 
@endphp

	<!-- Our Footer -->
	<section class="footer_one">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 pr0 pl0">
					<div class="footer_about_widget">
						<h4>{{json_decode($footer_content->content)->title}}</h4>
						<p>{{json_decode($footer_content->content)->sub_title}}</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_qlink_widget">
						<h4>Quick Links</h4>
						<ul class="list-unstyled">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">User’s Guide</a></li>
							<li><a href="#">Support Center</a></li>
							<li><a href="#">Press Info</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_contact_widget">
						<h4>Contact Us</h4>
						<ul class="list-unstyled">
							<li><a href="#"><span class="__cf_email__" data-cfemail="177e79717857717e79737f786264723974787a">{{$sett->email}}</span></a></li>
							<li><a href="#">{{$sett->address}}, {{$sett->Sity}}</a></li>
							<li><a href="#">{{$sett->phone}}</a></li>
							<li><a href="#">Works Hour : {{$sett->works_hour}}</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_social_widget">
						<h4>Follow us</h4>
						<ul class="mb30">
							<li class="list-inline-item"><a href="{{$sett->fb}}"><i class="fa fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href="{{$sett->tiwitter}}"><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="{{$sett->insta}}"><i class="fa fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="{{$sett->prinst}}"><i class="fa fa-pinterest"></i></a></li>
							
						</ul>
						<h4>Subscribe</h4>
						@include('Front/includes/errors')
						<form class="footer_mailchimp_form" action="{{route('subscribe')}}" method="post">
						@csrf
						 	<div class="form-row align-items-center">
							    <div class="col-auto">
							    	<input type="email" name="email" class="form-control mb-2" id="inlineFormInput" placeholder="Your email">
							    </div>
							    <div class="col-auto">
							    	<button type="submit" class="btn btn-primary mb-2"><i class="fa fa-angle-right"></i></button>
							    </div>
						  	</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer Bottom Area -->
	<section class="footer_middle_area pt40 pb40">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xl-6">
					<div class="footer_menu_widget">
						<ul>
							<li class="list-inline-item"><a href="{{route('homepage')}}">Home</a></li>
							<li class="list-inline-item"><a href="{{route('allProperties')}}">All Properties</a></li>
							<li class="list-inline-item"><a href="{{route('showAgencies')}}">Agencies</a></li>
							<li class="list-inline-item"><a href="{{route('showAgents')}}">Agent</a></li>
							<li class="list-inline-item"><a href="{{route('contact')}}">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-xl-6">
					<div class="copyright-widget text-right">
						<p>© 2020 3QAR.com Made with love.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
<!-- Wrapper End -->


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="{{asset('Front/js')}}/jquery-3.3.1.js"></script>
<script type="text/javascript" src="{{asset('Front/js')}}/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="{{asset('Front/js')}}/popper.min.js"></script>
<script type="text/javascript" src="{{asset('Front/js')}}/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('Front/js')}}/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="{{asset('Front/js')}}/ace-responsive-menu.js"></script>
<script type="text/javascript" src="{{asset('Front/js')}}/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{asset('Front/js')}}/isotop.js"></script>
<script type="text/javascript" src="{{asset('Front/js')}}/snackbar.min.js"></script>
<script type="text/javascript" src="{{asset('Front/js')}}/simplebar.js"></script>
<script type="text/javascript" src="{{asset('Front/js')}}/parallax.js"></script>
<script type="text/javascript" src="{{asset('Front/js')}}/scrollto.js"></script>
<script type="text/javascript" src="{{asset('Front/js')}}/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="{{asset('Front/js')}}/jquery.counterup.js"></script>
<script type="text/javascript" src="{{asset('Front/js')}}/wow.min.js"></script>
<script type="text/javascript" src="{{asset('Front/js')}}/slider.js"></script>
<script type="text/javascript" src="{{asset('Front/js')}}/timepicker.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="{{asset('Front/js')}}/script.js"></script>
<script>
	$('.hide-me-on-click').on('click',function(){
		$(this).slideUp('fast');
	});
</script>
</body>

</html>