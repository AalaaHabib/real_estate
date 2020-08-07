
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->  
	<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu 
	@if(Route::currentRouteName()=='homepage') test @else style2 @endif">
		<div class="container-fluid p0">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="{{asset('uploads/settings'.$sett->logo)}}" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="{{asset('Front/images')}}/header-logo.png" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="{{asset('Front/images')}}/header-logo2.png" alt="header-logo2.png">
		            <span>3QAK.com</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
		            <li>
		                <a href="{{route('homepage')}}"><span class="title">Home</span></a>
		            </li>
		            <li>
		                <a href="#"><span class="title">Property</span></a>
		                <!-- Level Two-->
	                	<ul>
		                    <li>
		                        <a href="{{route('allProperties')}}">All Property</a>
		                    </li>
		                    <li>
		                        <a href="#">Property in category </a>
		                        <!-- Level Three-->
		                        <ul>
									@foreach($cats as $cat)
		                            <li><a href="{{route('catProp',$cat->id)}}">{{$cat->name}}</a></li>
									@endforeach
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">property in city</a>
		                        <!-- Level Three-->
		                        <ul>
								@foreach($cities as $city)
		                            <li><a href="{{route('countryProperty',$city->id)}}">{{$city->name}}</a></li>
		                         @endforeach
		                        </ul>
	                	</ul>
		            </li>
		        
					<li >
		                <a href="{{route('showAgencies')}}"><span class="title">Agencies</span></a>
		            </li>
		            <li >
		                <a href="{{route('showAgents')}}"><span class="title">Agents</span></a>
		            </li>
					<li class="last">
		                <a href="{{route('contact')}}"><span class="title">Contact</span></a>
					</li>
			@if(Auth::user())
						<li class="list-inline-item add_listing"><a href="{{route('createProp')}}"><span class="flaticon-plus"></span><span class="dn-lg"> Create Listing</span></a></li>
						<li><a href="{{route('user.Logout')}}"> <span class="dn-lg">Logout</span></a></li>
			@else
						<li><a href="{{route('user.register')}}"class="btn flaticon-user" > <span class="dn-lg">Register</span></a></li>
						<li><a href="{{route('user.login')}}"  > <span class="dn-lg">Login</span></a></li>
	        @endif  
		        </ul>
		    </nav>
		</div>
	</header>
	

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center">
		            <img class="nav_logo_img img-fluid mt20" src="{{asset('Front/images')}}/header-logo2.png" alt="header-logo2.png">
		            <span class="mt20">3KAR.cpm</span>
				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href=""><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li>
					<a href="{{route('homepage')}}"><span class="title">Home</span></a> 
				</li>
				<li>
		                <a href="#"><span class="title">Property</span></a>
		                <!-- Level Two-->
	                	<ul>
		                    <li>
		                        <a href="{{route('allProperties')}}">All Property</a>
		                    </li>
		                    <li>
		                        <a href="#">Property in category </a>
		                        <!-- Level Three-->
		                        <ul>
									@foreach($cats as $cat)
		                            <li><a href="{{route('catProp',$cat->id)}}">{{$cat->name}}</a></li>
									@endforeach
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">property in city</a>
		                        <!-- Level Three-->
		                        <ul>
								@foreach($cities as $city)
		                            <li><a href="{{route('countryProperty',$city->id)}}">{{$city->name}}</a></li>
		                         @endforeach
		                        </ul>
	                	</ul>
		            </li>
				<li><a href="{{route('showAgencies')}}"><span class="title">Agencies</span></a></li>
		        <li> <a href="{{route('showAgents')}}"><span class="title">Agents</span></a> </li>
				<li class="">  <a href="{{route('contact')}}"><span class="title">Contact</span></a></li>
				<li><a href="{{route('user.login')}}"><span class="flaticon-user"></span> Login</a></li>
				<li><a href="{{route('user.register')}}"><span class="flaticon-edit"></span> Register</a></li>
				<li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="{{route('createProp')}}"><span class="flaticon-plus"></span> Create Listing</a></li>
			</ul>
		</nav>
	</div>