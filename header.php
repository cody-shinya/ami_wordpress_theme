<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <title>Ami's Cake</title>
    
    <?php wp_head();?>
</head>

<body <?php body_class('test');?>>


<!--================ Preloader Start =================-->
	<div id="preloader">
		<div id="status">
			<img src="<?php bloginfo('template_directory');?>/img/loader.gif" id="preloader_image" alt="loader">
		</div>
	</div>
<!--================ Preloader End =================-->	

<!--================Main Header Area =================-->
		<header class="main_header_area">
			<div class="top_header_area row m0">
				<div class="container">
					<div class="float-left">
						<a href="tell:+1.857.203.7158"><i class="fa fa-phone" aria-hidden="true"></i>+1.857.203.7158</a>
						<a href="mainto:info@amicake.bar"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@amicake.bar</a>
					</div>
					<div class=" float-right">
						<ul class="h_social list_style">
							<li><a href="<?php bloginfo('url')?>/coming-soon"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php bloginfo('url')?>/coming-soon""><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?php bloginfo('url')?>/coming-soon""><i class="fa fa-google-plus"></i></a></li>
							<li><a href="<?php bloginfo('url')?>/coming-soon""><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<ul class="h_search list_style">
							<li><a href="<?php bloginfo('url')?>/my-account"><i class="fa fa-user"></i></a></li>
							<li><a class="popup-with-zoom-anim" href="#test-search"><i class="fa fa-search"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="main_menu_area">
				<div class=" container">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="<?php bloginfo('url')?>">
						<img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="" >
						<img src="<?php bloginfo('template_directory');?>/img/logo-2.png" alt="" >
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li><a href="<?php bloginfo('url');?>">Home</a></li>
								<li><a href="<?php bloginfo('url');?>/our-cakes">Our Cakes</a></li>
								<li><a href="<?php bloginfo('url');?>/menu">Menu</a></li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
									<ul class="dropdown-menu">
										<li><a href="<?php bloginfo('url');?>/about-us">About Us</a></li>
										<li><a href="<?php bloginfo('url');?>/our-chefs">Our Chefs</a></li>
										
									</ul>
								</li>
							</ul>
							<ul class="navbar-nav justify-content-end">
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown"
									 href="<?php bloginfo('url');?>/services" 
									 role="button" aria-haspopup="true" aria-expanded="false">Account</a>
									<ul class="dropdown-menu">
										<li><a href="<?php bloginfo('url');?>/my-account">My Account</a></li>
										<li><a href="<?php bloginfo('url');?>/coupon">Coupon</a></li>
										
										
										
									</ul>
								</li>
								
								<li><a href="<?php bloginfo('url');?>/category/blogs">Blogs</a></li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" 
									href="<?php bloginfo('url');?>/shop" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
									<ul class="dropdown-menu">
										<li><a href="<?php bloginfo('url');?>/shop">Order Cakes</a></li>
										<!-- <li><a href="product-details.html">Product Details</a></li> -->
										<li><a href="<?php bloginfo('url');?>/cart">Cart</a></li>
										<li><a href="<?php bloginfo('url');?>/checkout">Checkout</a></li>
										<li><a href="<?php bloginfo('url');?>/my-account/orders">Orders</a></li>
									</ul>
								</li>
								<li><a href="<?php bloginfo('url');?>/contact-us">Contact Us</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>
<!--================End Main Header Area =================-->

<!--================Search Box Area =================-->
<div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
	<form class="search_box_inner"  id="search-form"
		role="search" method="get"
		action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<h3>Search</h3>
		<div class="input-group">
			 <!-- input hidden for different categories here. -->
			<input type="search" 
			name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>"
			class="form-control" placeholder="Search for..." required>
			<div class=" input-group-append">
			<button type="submit" class=" input-group-append input-group-btn"
			style="border:0; background:none;">
				<!-- <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button> -->
				<i class="btn fa fa-search" style="color: white;"></i>
			</button>
			</div>
		</div>
	</form>
</div>
<!--================End Search Box Area =================-->




