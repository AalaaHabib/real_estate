@include('Admin/inc/header')

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
		            <img class="nav_logo_img img-fluid"src="{{asset('Front/images')}}/header-logo.png" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid"src="{{asset('Front/images')}}/header-logo2.png" alt="header-logo.png">
		            <img class="logo2 img-fluid"src="{{asset('Front/images')}}/header-logo2.png" alt="header-logo2.png">
		            <span>FindHouse</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
		         
		            <li>
		                <a href="#"><span class="title">Listing</span></a>
		                <!-- Level Two-->
	                	<ul>
		                    <li>
		                        <a href="#">Listing Grid</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-listing-grid-v1.html">Grid v1</a></li>
		                            <li><a href="page-listing-grid-v2.html">Grid v2</a></li>
		                            <li><a href="page-listing-grid-v3.html">Grid v3</a></li>
		                            <li><a href="page-listing-grid-v4.html">Grid v4</a></li>
		                            <li><a href="page-listing-grid-v5.html">Grid v5</a></li>
		                            <li><a href="page-listing-full-width-grid.html">Grid Fullwidth</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">Listing List</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-listing-list.html">List V1</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">Listing Style</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-listing-parallax.html">Parallax Style</a></li>
		                            <li><a href="page-listing-slider.html">Slider Style</a></li>
		                            <li><a href="page-listing-map.html">Map Header</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">Listing Half</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-listing-half-map-v1.html">Map V1</a></li>
		                            <li><a href="page-listing-half-map-v2.html">Map V2</a></li>
		                            <li><a href="page-listing-half-map-v3.html">Map V3</a></li>
		                            <li><a href="page-listing-half-map-v4.html">Map V4</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">Agent View</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-listing-agent-v1.html">Agent V1</a></li>
		                            <li><a href="page-listing-agent-v2.html">Agent V2</a></li>
		                            <li><a href="page-listing-agent-v3.html">Agent Details</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">Agencies View</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-listing-agencies-v1.html">Agencies V1</a></li>
		                            <li><a href="page-listing-agencies-v2.html">Agencies V2</a></li>
		                            <li><a href="page-listing-agencies-v3.html">Agencies Details</a></li>
		                        </ul>
		                    </li>
                            <li><a href="page-add-new-property.html">Create Listing</a></li>
	                	</ul>
		            </li>
		            <li>
		                <a href="#"><span class="title">Property</span></a>
		                <ul>
		                    <li>
		                        <a href="#">User Admin</a>
		                        <ul>
				                    <li><a href="page-dashboard.html">Dashboard</a></li>
				                    <li><a href="page-my-properties.html">My Properties</a></li>
				                    <li><a href="page-message.html">My Message</a></li>
				                    <li><a href="page-my-review.html">My Review</a></li>
				                    <li><a href="page-my-favorites.html">My Favorites</a></li>
				                    <li><a href="page-add-new-property.html">Add Property</a></li>
				                    <li><a href="page-my-profile.html">My Profile</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">Listing Single</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-listing-single-v1.html">Single V1</a></li>
		                            <li><a href="page-listing-single-v2.html">Single V2</a></li>
		                            <li><a href="page-listing-single-v3.html">Single V3</a></li>
		                            <li><a href="page-listing-single-v4.html">Single V4</a></li>
		                            <li><a href="page-listing-single-v5.html">Single V5</a></li>
		                        </ul>
		                    </li>
                            <li><a href="page-add-new-property.html">Create Listing</a></li>
		                </ul>
		            </li>
		            <li>
		                <a href="#"><span class="title">Pages</span></a>
		                <ul>
				            <li>
				                <a href="#"><span class="title">Pages</span></a>
				                <ul>
				                    <li><a href="page-shop.html">Shop</a></li>
				                    <li><a href="page-shop-single.html">Shop Single</a></li>
				                    <li><a href="page-shop-cart.html">Cart</a></li>
				                    <li><a href="page-shop-checkout.html">Checkout</a></li>
				                    <li><a href="page-shop-order.html">Order</a></li>
				                </ul>
				            </li>
		                    <li><a href="page-about.html">About Us</a></li>
		                    <li><a href="page-gallery.html">Gallery</a></li>
		                    <li><a href="page-faq.html">Faq</a></li>
		                    <li><a href="page-login.html">LogIn</a></li>
			                <li><a href="page-compare.html">Membership</a></li>
			                <li><a href="page-compare2.html">Membership 2</a></li>
		                    <li><a href="page-register.html">Register</a></li>
		                    <li><a href="page-service.html">Service</a></li>
		                    <li><a href="page-error.html">404 Page</a></li>
		                    <li><a href="page-terms.html">Terms and Conditions</a></li>
		                    <li><a href="page-ui-element.html">UI Elements</a></li>
		                </ul>
		            </li>
		            <li>
		                <a href="#"><span class="title">Blog</span></a>
		                <ul>
		                    <li><a href="page-blog-v1.html">Blog List 1</a></li>
		                    <li><a href="page-blog-grid.html">Blog List 2</a></li>
		                    <li><a href="page-blog-single.html">Single Post</a></li>
		                </ul>
		            </li>
		            <li class="last">
		                <a href="page-contact.html"><span class="title">Contact</span></a>
		            </li>
	                <li class="user_setting">
						<div class="dropdown">
	                		<a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle"src="{{asset('Front/images')}}/team/e1.png" alt="e1.png"> <span class="dn-1199">Ali Tufan</span></a>
						    <div class="dropdown-menu">
						    	<div class="user_set_header">
						    		<img class="float-left"src="{{asset('Front/images')}}/team/e1.png" alt="e1.png">
							    	<p>Ali Tufan <br><span class="address"><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ec8d808598998a8d82ac8b818d8580c28f8381">[email&#160;protected]</a></span></p>
						    	</div>
						    	<div class="user_setting_content">
									<a class="dropdown-item active" href="#">My Profile</a>
									<a class="dropdown-item" href="#">Messages</a>
									<a class="dropdown-item" href="#">Purchase history</a>
									<a class="dropdown-item" href="#">Help</a>
									<a class="dropdown-item" href="#">Log out</a>
						    	</div>
						    </div>
						</div>
			        </li>
	                <li class="list-inline-item add_listing"><a href="page-add-new-property.html"><span class="dn-lg"> Logout</span></a></li>
		        </ul>
		    </nav>
		</div>
	</header>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center">
		            <img class="nav_logo_img img-fluid mt20"src="{{asset('Front/images')}}/header-logo2.png" alt="header-logo2.png">
		            <span class="mt20">FindHouse</span>
				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="page-register.html"><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li><span>Home</span>
	                <ul>
	                    <li><a href="index.html">Home 1</a></li>
	                    <li><a href="index2.html">Home 2</a></li>
	                    <li><a href="index3.html">Home 3</a></li>
	                    <li><a href="index4.html">Home 4</a></li>
	                    <li><a href="index5.html">Home 5</a></li>
	                    <li><a href="index6.html">Home 6</a></li>
	                    <li><a href="index7.html">Home 7</a></li>
	                    <li><a href="index8.html">Home 8</a></li>
	                    <li><a href="index9.html">Home 9</a></li>
	                    <li><a href="index10.html">Home 10</a></li>
	                </ul>
				</li>
				<li><span>Listing</span>
					<ul>
						<li><span>Listing Grid</span>
							<ul>
	                            <li><a href="page-listing-grid-v1.html">Grid v1</a></li>
	                            <li><a href="page-listing-grid-v2.html">Grid v2</a></li>
	                            <li><a href="page-listing-grid-v3.html">Grid v3</a></li>
	                            <li><a href="page-listing-grid-v4.html">Grid v4</a></li>
	                            <li><a href="page-listing-grid-v5.html">Grid v5</a></li>
	                            <li><a href="page-listing-full-width-grid.html">Grid Fullwidth</a></li>
							</ul>
						</li>
						<li><span>Listing Style</span>
							<ul>
	                            <li><a href="page-listing-parallax.html">Parallax Style</a></li>
	                            <li><a href="page-listing-slider.html">Slider Style</a></li>
	                            <li><a href="page-listing-map.html">Map Header</a></li>
							</ul>
						</li>
						<li><span>Listing Half</span>
							<ul>
	                            <li><a href="page-listing-half-map-v1.html">Map V1</a></li>
	                            <li><a href="page-listing-half-map-v2.html">Map V2</a></li>
	                            <li><a href="page-listing-half-map-v3.html">Map V3</a></li>
	                            <li><a href="page-listing-half-map-v4.html">Map V4</a></li>
							</ul>
						</li>
						<li><span>Agent View</span>
							<ul>
	                            <li><a href="page-listing-agent-v1.html">Agent V1</a></li>
	                            <li><a href="page-listing-agent-v2.html">Agent V2</a></li>
	                            <li><a href="page-listing-agent-v3.html">Agent Details</a></li>
							</ul>
						</li>
						<li><span>Agencies View</span>
							<ul>
	                            <li><a href="page-agencies-list-v1.html">Agencies V1</a></li>
	                            <li><a href="page-agencies-list-v2.html">Agencies V2</a></li>
	                            <li><a href="page-agencies-list-v3.html">Agencies Details</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><span>Property</span>
					<ul>
						<li><span>Property</span>
							<ul>
					            <li><a href="page-dashboard.html">Dashboard</a></li>
			                    <li><a href="page-my-properties.html">My Properties</a></li>
			                    <li><a href="page-add-new-property.html">Add New Property</a></li>
							</ul>
						</li>
						<li><span>Listing Single</span>
							<ul>
	                            <li><a href="page-listing-single-v1.html">Single V1</a></li>
	                            <li><a href="page-listing-single-v2.html">Single V2</a></li>
	                            <li><a href="page-listing-single-v3.html">Single V3</a></li>
	                            <li><a href="page-listing-single-v4.html">Single V4</a></li>
	                            <li><a href="page-listing-single-v5.html">Single V5</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><span>Blog</span>
					<ul>
	                    <li><a href="page-blog-v1.html">Blog List 1</a></li>
	                    <li><a href="page-blog-grid.html">Blog List 2</a></li>
	                    <li><a href="page-blog-single.html">Single Post</a></li>
					</ul>
				</li>
				<li><span>Pages</span>
					<ul>
						<li><span>Shop</span>
							<ul>
			                    <li><a href="page-shop.html">Shop</a></li>
			                    <li><a href="page-shop-single.html">Shop Single</a></li>
			                    <li><a href="page-shop-cart.html">Cart</a></li>
			                    <li><a href="page-shop-checkout.html">Checkout</a></li>
			                    <li><a href="page-shop-order.html">Order</a></li>
							</ul>
						</li>
		                <li><a href="page-about.html">About Us</a></li>
		                <li><a href="page-gallery.html">Gallery</a></li>
		                <li><a href="page-faq.html">Faq</a></li>
		                <li><a href="page-login.html">LogIn</a></li>
		                <li><a href="page-compare.html">Membership</a></li>
		                <li><a href="page-compare2.html">Membership 2</a></li>
	                    <li><a href="page-register.html">Register</a></li>
	                    <li><a href="page-service.html">Service</a></li>
		                <li><a href="page-error.html">404 Page</a></li>
		                <li><a href="page-terms.html">Terms and Conditions</a></li>
		                <li><a href="page-ui-element.html">UI Elements</a></li>
					</ul>
				</li>
				<li><a href="page-contact.html">Contact</a></li>
				<li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
				<li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
				<li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="#"><span class="flaticon-plus"></span> Logout</a></li>
			</ul>
		</nav>
	</div>

    <div class="dashboard_sidebar_menu dn-992">
	    <ul class="sidebar-menu">
	   		<li class="header"><img src="{{asset('Front/images')}}/header-logo2.png" alt="header-logo2.png"> FindHouse</li>
	   		<li class="title"><span>Main</span></li>
	    	<li class="treeview"><a href="{{route('admin.index')}}"><i class="flaticon-layers"></i><span> Dashboard</span></a></li>
	      	<li class="treeview"><a href="page-message.html"><i class="flaticon-envelope"></i><span> Message</span></a></li>
	   		<li class="title"><span>Manage Listings</span></li>
	      	<li class="treeview">
		        <a href="page-my-properties.html"><i class="flaticon-home"></i> <span>Properties</span></a>
	      	</li>
	      	<li><a href="{{route('adminCats.index')}}"><i class="flaticon-heart"></i> <span>Categories</span></a></li>
	      	<li><a href="{{route('adminLocations.index')}}"><i class="flaticon-magnifying-glass"></i> <span>Cities</span></a></li>
	     	<li class="treeview"> 
		        <a href="page-my-review.html"><i class="flaticon-user"></i><span>Users</span><i class="fa fa-angle-down pull-right"></i></a>
		        <ul class="treeview-menu">
		        	<li><a href="#"><i class="fa fa-circle"></i>Agent</a></li>
		        	<li><a href="#"><i class="fa fa-circle"></i>companies</a></li>
		        </ul>
	      	</li>
	   		<li class="title"><span>Manage Website</span></li>
		    <li><a href="page-my-packages.html"><i class="flaticon-box"></i> <span>Site Content</span></a></li>
		    <li><a href="page-my-profile.html"><i class="flaticon-plus"></i> <span>Setting</span></a></li>
	    </ul>
    </div>

	@yield('content')
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>


@include('Admin/inc/footer')