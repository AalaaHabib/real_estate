@include('Admin/inc/header')
@php 
	$sett=\App\Setting::first(); 
@endphp
<body>
<div class="wrapper">
	<div class="preloader"></div>
	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one style2 menu-fixed main-menu">
		<div class="container-fluid p0">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid"src="{{asset('Front/images')}}/header-logo.png"  >
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid"src="{{asset('Front/images')}}/header-logo2.png"  >
		            <img class="logo2 img-fluid"src="{{asset('Front/images')}}/header-logo2.png"  >
		            {{-- <span>{{$sett->logo}}</span> --}}
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
					{{-- <li >
		                <a href="page-contact.html"><span class="title">Dashboard</span></a>
					</li>
					<li >
		                <a href="page-contact.html"><span class="title">Message</span></a>
					</li>
					<li >
		                <a href="page-contact.html"><span class="title">properties</span></a>
					</li>
					<li >
		                <a href="page-contact.html"><span class="title">categories</span></a>
					</li>
					<li >
		                <a href="page-contact.html"><span class="title">cities</span></a>
		            </li>
				 --}}
					{{-- <li>
		                <a href="#"><span class="title">Users</span></a>
		                <ul>
							<li><a href="page-add-new-property.html">All User</a></li>
							<li><a href="page-add-new-property.html">Agents</a></li>
							<li><a href="page-add-new-property.html">Companies</a></li>
		                </ul>
		            </li> --}}
					{{-- <li class="last">
		                <a href="page-contact.html"><span class="title">site content</span></a>
		            </li>
		            <li class="last">
		                <a href="page-contact.html"><span class="title">setting</span></a>
		            </li> --}}
	                <li class="list-inline-item add_listing mt-2"><a href="{{route('admin.logout')}}"><span class="dn-lg"> Logout</span></a></li>
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
		            <span class="mt20">3QAR.com</span>
				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="{{route('admin.logout')}}"><span >logout</span></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li>
					<a href="{{route('admin.index')}}"><span class="title">Dashboard</span></a> 
				</li>
				<li><a href="{{route('adminMessage.index')}}"><span class="title">Message</span></a></li>
		        <li> <a href="{{route('adminProp.index')}}"><span class="title">Properties</span></a> </li>
				<li class="">  <a href="{{route('adminCats.index')}}"><span class="title">Categories</span></a></li>
				<li>
		                <a href="#"><span class="title">Users</span></a>
		                <!-- Level Two-->
	                	<ul>
		                    <li>
		                        <a href="{{route('admin.users.index')}}">All Users</a>
		                    </li>
							<li>
		                        <a href="{{route('admin.users.agents')}}">Agents</a>
		                    </li>
							<li>
		                        <a href="{{route('admin.users.companies')}}">Agencies</a>
		                    </li>
	                	</ul>
		        </li>
				<li><a href="{{route('siteContent.index')}}"><span class="title">Site Content</span></a></li>
		        <li> <a href="{{route('setting.index')}}"><span class="title">Setting</span></a> </li>
				
				<li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="{{route('admin.logout')}}"> Logout</a></li>			</ul>
		</nav>
	</div>
	

    <div class="dashboard_sidebar_menu dn-992 " >
	    <ul class="sidebar-menu">
	   		<li class="header"><img src="{{asset('Front/images')}}/header-logo2.png" alt="header-logo2.png"> {{$sett->logo}}</li>
	   		<li class="title"><span>Main</span></li>
	    	<li class="treeview"><a href="{{route('admin.index')}}"><i class="flaticon-layers"></i><span> Dashboard</span></a></li>
	      	<li class="treeview"><a href="{{route('adminMessage.index')}}"><i class="flaticon-envelope"></i><span> Message</span></a></li>
	   		<li class="title"><span>Manage Listings</span></li>
	      	<li class="treeview">
		        <a href="{{route('adminProp.index')}}"><i class="flaticon-home"></i> <span>Properties</span></a>
	      	</li>
	      	<li><a href="{{route('adminCats.index')}}"><i class="flaticon-heart"></i> <span>Categories</span></a></li>
	      	<li><a href="{{route('adminLocations.index')}}"><i class="flaticon-magnifying-glass"></i> <span>Cities</span></a></li>
	     	<li class="treeview"> 
		        <a href="page-my-review.html"><i class="flaticon-user"></i><span>Users</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
					<li><a href="{{route('admin.users.index')}}"><i class="fa fa-circle"></i>All User</a></li>
		        	<li><a href="{{route('admin.users.agents')}}"><i class="fa fa-circle"></i>Agent</a></li>
					<li><a href="{{route('admin.users.companies')}}"><i class="fa fa-circle"></i>Companies</a></li>
		        </ul>
	      	</li>
	   		<li class="title"><span>Manage Website</span></li>
		    <li><a href="{{route('siteContent.index')}}"><i class="flaticon-box"></i> <span>Site Content</span></a></li>
		    <li><a href="{{route('setting.index')}}"><i class="flaticon-plus"></i> <span>Setting</span></a></li>
	    </ul>
    </div>
<div class="offset-1">
	@yield('content')
</div>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>

</div>


@include('Admin/inc/footer')