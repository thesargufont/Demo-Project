<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>HOMEPAGE | DEMO 1</title>
	<link rel="stylesheet" href='{{ asset('sample_1/lib/bootstrap/css/bootstrap.min.css') }}'>
	<link rel="stylesheet" href='{{ asset('sample_1/lib/slick/slick.css') }}'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans%7CMontserrat:300,500,600,700%7CPlayfair+Display:700">
	<link rel="stylesheet" href='{{ asset('sample_1/lib/font-awesome/css/font-awesome.min.css') }}'>
	<link rel="stylesheet" href='{{ asset('sample_1/css/main.css') }}'>
</head>
<body>
	<div id="page-loader">
		<i class="fa fa-cog fa-spin grad-text grad-2"></i>
	</div>

	<header>
		<div class="pos-r">
			<div id="topbar" class="clearfix">

				<ul class="pull-right right-menu">
					<li class="cart">
						<a href="#"><i class="fa fa-briefcase"></i><span>4</span></a>
						<div class="cart-container">
							<h6>SHOPPING CART (2)</h6>
							<div class="cart-item clearfix">
								<img src="https://via.placeholder.com/70x70" alt="cart item" class="pull-left">
								<a href="#">How to become an UX Designer</a>
								<p class="quantity">1x $39,99</p>
								<button class="remove">x DELETE</button>
							</div>
							<div class="cart-item clearfix">
								<img src="https://via.placeholder.com/70x70" alt="cart item" class="pull-left">
								<a href="#">How to become an UX Designer</a>
								<p class="quantity">1x $39,99</p>
								<button class="remove">x DELETE</button>
							</div>
							<div class="cart-controls text-center">
								<a href="#" class="checkout">CHECKOUT</a>
								<a href="#" class="viewcart">VIEW CART</a>
								<a href="#" class="addcourse">+ ADD ITEM</a>
							</div>
						</div>
					</li>
					<li class="search">
						<a href="#" class="search"><i class="fa fa-search zmdi-lg"></i></a>
						<div class="search-something">
							<input type="search" placeholder="search for something">
							<a href="#"><i class="fa fa-search zmdi-lg"></i></a>
						</div>
					</li>
				</ul>

				<div class="pull-left logo">
					<a href="index.html">
						<h1><img src="https://via.placeholder.com/81x34" alt="logo"/></h1>
					</a>
				</div>

				<nav class="navbar-toggleable-md navbar-dark bg-faded">
					<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse nav-mobile" id="navbarToggler">
						<ul class="mx-auto top-level clearfix box-shadow-1">
							<li><a href="index.html">Homepage Layout 01</a></li>
							<li><a href="index2.html">Homepage Layout 02</a></li>
							<li><a href="index3.html">Homepage Layout 03</a></li>
							<li><a href="index4.html">Homepage Layout 04</a></li>
							<li><a href="index5.html">Homepage Layout 05</a></li>
							<li><a href="about1.html">About 01</a></li>
							<li><a href="about2.html">About 02</a></li>
							<li><a href="portfolio-2-cols.html">Portfolio 2 columns</a></li>
							<li><a href="portfolio-3-cols.html">Portfolio 3 columns</a></li>
							<li><a href="portfolio-3-cols-alt.html">Portfolio 3 columns</a></li>
							<li><a href="portfolio-4-cols.html">Portfolio 4 columns</a></li>
							<li><a href="portfolio-4-cols-alt.html">Portfolio 4 columns</a></li>
							<li><a href="portfolio-4-cols-alt-narrow.html">Portfolio 4 columns</a></li>
							<li><a href="portfolio-sidebar.html">Portfolio Sidebar</a></li>
							<li><a href="portfolio-single.html">Portfolio Single</a></li>
							<li><a href="portfolio-single-sidebar.html">Portfolio Single Sidebar</a></li>
							<li><a href="process1.html">Process 1</a></li>
							<li><a href="process2.html">Process 2</a></li>
							<li><a href="service1.html">Service 1</a></li>
							<li><a href="service2.html">Service 2</a></li>
							<li><a href="service3.html">Service 3</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="blog-post.html">Blog post</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>

					<div class="nav-desktop container">
						<ul class="mx-auto top-level clearfix">
							<li class="with-submenu">
								<a class="link-hover" href="#">HOME</a>
								<ul class="submenu">
									<li>
										<a href="index.html">Homepage Layout 01</a>
									</li>
									<li>
										<a href="index2.html">Homepage Layout 02</a>
									</li>
									<li>
										<a href="index3.html">Homepage Layout 03</a>
									</li>
									<li>
										<a href="index4.html">Homepage Layout 04</a>
									</li>
									<li>
										<a href="index5.html">Homepage Layout 05</a>
									</li>
								</ul>
							</li>
							<li class="with-submenu">
								<a class="link-hover" href="about1.html">ABOUT</a>
								<ul class="submenu">
									<li>
										<a href="about1.html">About 1</a>
									</li>
									<li>
										<a href="about2.html">About 2</a>
									</li>
								</ul>
							</li>
							<li class="with-submenu">
								<a class="link-hover" href="portfolio-2-cols.html">PORTFOLIO</a>
								<ul class="submenu">
									<li>
										<a href="portfolio-2-cols.html">Portfolio 2 columns</a>
									</li>
									<li>
										<a href="portfolio-3-cols.html">Portfolio 3 columns</a>
									</li>
									<li>
										<a href="portfolio-3-cols-alt.html">Portfolio 3 columns</a>
									</li>
									<li>
										<a href="portfolio-4-cols.html">Portfolio 4 columns</a>
									</li>
									<li>
										<a href="portfolio-4-cols-alt.html">Portfolio 4 columns</a>
									</li>
									<li>
										<a href="portfolio-4-cols-alt-narrow.html">Portfolio 4 columns</a>
									</li>
									<li>
										<a href="portfolio-sidebar.html">Portfolio Sidebar</a>
									</li>
									<li>
										<a href="portfolio-single.html">Portfolio Single</a>
									</li>
									<li>
										<a href="portfolio-single-sidebar.html">Portfolio Single Sidebar</a>
									</li>
								</ul>
							</li> 
							<li class="with-submenu">
								<a class="link-hover" href="#">PAGES</a>
								<ul class="submenu">
									<li>
										<a href="process1.html">Process 1</a>
									</li>
									<li>
										<a href="process2.html">Process 2</a>
									</li>
									<li>
										<a href="service1.html">Service 1</a>
									</li>
									<li>
										<a href="service2.html">Service 2</a>
									</li>
									<li>
										<a href="service3.html">Service 3</a>
									</li>
								</ul>
							</li> 					
							<li class="with-submenu">
								<a class="link-hover" href="blog.html">BLOG</a>
								<ul class="submenu">
									<li>
										<a href="blog.html">Blog</a>
									</li>
									<li>
										<a href="blog-post.html">Blog Post</a>
									</li>
								</ul>
							</li>
							<li class="with-submenu">
								<a class="link-hover" href="contact.html">CONTACT</a>
							</li>
						</ul>
					</div>
				</nav>				
			</div>
		</div>
		<div class="header-content fullheight">
			<div class="slick-header fullheight">
				<div class="header-slide text-center slide-1">
					<div class="container">
						<h2>Ticket To The Moon</h2>
						<hr>    
						<p>
							No matter where each of us stands on this planet we call home, 
                            we all look up to the same place. 
                            That’s why we believe space belongs to everyone: 
                            the adventurous, the audacious, and the curious.
						</p>
						<a href="#" class="header-button">ORDER NOW</a>
					</div>	
				</div>
				<div class="header-slide text-center slide-1">
					<div class="container">
						<h2>Ready For Space Trip?</h2>
						<hr>
						<p>
							“Taking more and more passengers out into space will 
                            enable them, and us, to look both outward and back but with 
                            a fresh perspective in both directions.” 
						</p>
						<a href="#" class="header-button">ORDER NOW</a>
					</div>
				</div>
				{{-- <div class="header-slide text-center slide-1">
					<div class="container">
						<h2>Innovative Ideas</h2>
						<hr>
						<p>
							Litollum dolore eu feugiat nulla facilisis at vero 
							eros et accumsan et iusto odio dignissim qui blandit 
							praesent luptatum zzril delenit augue duis. 
						</p>
						<a href="#" class="header-button">ORDER NOW</a>
					</div>
				</div>
				<div class="header-slide text-center slide-1">
					<div class="container">
						<h2>We bring your ideas to life</h2>
						<hr>
						<p>
							Litollum dolore eu feugiat nulla facilisis at vero 
							eros et accumsan et iusto odio dignissim qui blandit 
							praesent luptatum zzril delenit augue duis. 
						</p>
						<a href="#" class="header-button">ORDER NOW</a>
					</div>
				</div> 
				<div class="header-slide text-center slide-1">
					<div class="container">
						<h2>We create stunning design</h2>
						<hr>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing 
							elit, sed diam nonummy nibh euismod tincidunt ut 
							laoreet dolore magna aliquam erat volutpat. 
						</p>
						<a href="#" class="header-button">ORDER NOW</a>
					</div>
				</div>  --}}
			</div>
		</div>
	</header>

	<main>
		<div class="container">
			
			<div class="widget service-widget-1">
				<div class="row">
					<div class="col-md-5 drag-left">
						<p class="watermark-1">Service</p>
						<p class="pretitle">CREATIVE AGENCY</p>
						<h3>Learn about our agency services</h3>
						<p>
							Duis autem vel eum iriure dolor in hendrerit 
							in vulputate velit esse molestie consequat, 
							vel illum dolore eu feugiat nulla facilisis 
							at vero eros et accumsan et iusto odio dignissim 
							qui blandit praesent luptatum.
						</p>
						<p class="pushtop-30">
							Maboe delenit augue duis dolore te feugait nulla 
							facilisi. Lorem ipsum dolor sit amet, conscidunt 
							ut laoreet dolore magna aliquam erat volutpat.  
						</p>
						<a href="#" class="button-link-1">
							LEARN MORE
						</a>
					</div>					
					<div class="col-md-7 pushtop-120 drag-right">
						<div class="row">
							<div class="col-sm-6">
								<img src="https://via.placeholder.com/40x40" alt="pencil" class="pull-left"/>
								<section>
									<h6>Handcrafted Design</h6>
									<p>
										Lorem ipsum dolor sit amet, consectetur 
										adipiscing elit. In non mi non sapien 
										ornare aliquet euismod sit amet sem. 
									</p>
								</section>
							</div>
							<div class="col-sm-6">
								<img src="https://via.placeholder.com/40x40" alt="briefcase" class="pull-left"/>
								<section>
									<h6>Business Consulting</h6>
									<p>
										Dignissim qui blandit praesent luptatum 
										zzril delenit augue duis dolore te 
										feugait nulla facilisi.   
									</p>
								</section>
							</div>
							<div class="col-sm-6">
								<img src="https://via.placeholder.com/40x40" alt="bottle" class="pull-left"/>
								<section>
									<h6>Creative Innovations</h6>
									<p>
										Consetetur sadipscing elitr, sed diam 
										nonumy eirmod tempor invidunt ut labore 
										et dolor erat, sed diam voluptua.
									</p>
								</section>
							</div>
							<div class="col-sm-6">
								<img src="https://via.placeholder.com/40x40" alt="graph" class="pull-left"/>
								<section>
									<h6>Pixel-Perfect Design</h6>
									<p>
										Dignissim qui blandit praesent luptatum 
										zzril delenit augue duis dolore te 
										feugait nulla facilisi.   
									</p>
								</section>	
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="widget expertise-widget-1 pushtop-200 drag-up">
				<div class="row">
					<div class="col-md-7">
						<img src="https://via.placeholder.com/913x964" alt="widget-image"/>
					</div>
					<div class="col-md-5">
						<p class="watermark-1">Expertise</p>
						<p class="pretitle">OUR EXPERTISE</p>
						<h3>It's about to reach the client's goals</h3>
						<div class="expertise-listing">
							<div class="expertise-element">
								<h6>
									<span class="pull-left numbers">01</span>
									Information Planning
								</h6>
								<p>
									Ut wisi enim ad minim veniam, quis nostrud 
									exerci tation ullamcorper suscipit lobortis 
									nisl ut aliquip ex ea commodo consequat. 
								</p>
							</div>
							<div class="expertise-element">	
								<h6>
									<span class="pull-left numbers">02</span>
									Website Conception
								</h6>
								<p>
									Ut wisi enim ad minim veniam, quis nostrud 
									exerci tation ullamcorper suscipit lobortis 
									nisl ut aliquip ex ea commodo consequat. 
								</p>
							</div>
							<div class="expertise-element">
								<h6>
									<span class="pull-left numbers">03</span>
									Interface Design
								</h6>
								<p>
									Ut wisi enim ad minim veniam, quis nostrud 
									exerci tation ullamcorper suscipit lobortis 
									nisl ut aliquip ex ea commodo consequat. 
								</p>
							</div>
							<div class="expertise-element">
								<h6>
									<span class="pull-left numbers">04</span>
									Design Strategy
								</h6>
								<p>
									Ut wisi enim ad minim veniam, quis nostrud 
									exerci tation ullamcorper suscipit lobortis 
									nisl ut aliquip ex ea commodo consequat. 
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="widget testimonials-widget-1 pushtop-350">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<p class="watermark-2">Testimonials</p>
						<p class="pretitle">CLIENT TESTIMONIALS</p>
						<h3>What our clients say about us</h3>
						<p>
							Nam liber tempor cum soluta nobis eleifend option 
							congue nihil imperdiet doming id quod mazim placerat 
							facer possim assum. Lorem ipsum dolor sit amet, consectetuer 
							adipiscing elit, sed diam nonummy nibh euismod tincidunt.
						</p>
						<a href="#" class="button-link-1">GET A QUOTE</a>
					</div>
					<div class="col-md-7">
						<div class="testimonial-listing">
							<div class="testimonial">
								<i class="fa fa-quote-left"></i>
								<p>
									“Lorem ipsum dolor sit amet. Lorem 
									ipsum dolor sit amet, consetetur 
									sadipscing elitr, sed diam nonumy ei”
								</p>
								<div class="testimonial-info pushtop-10">
									<img src="https://via.placeholder.com/65x65" alt="testimonial" class="pull-left avatar">
									<a href="#" class="name link-hover">Diana Moore</a>
									<ul class="person-social pushtop-10">
										<li>
											<a href="#"><i class="fa fa-facebook-f"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-dribbble"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-twitter"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="testimonial">
								<i class="fa fa-quote-left"></i>
								<p>
									“Consetetur sadipscing elitr, sed diam 
									nonumy eirmod tempor invidunt ut labore 
									et dolor erat, sed diam voluptua.”
								</p>
								<div class="testimonial-info pushtop-10">
									<img src="https://via.placeholder.com/65x65" alt="testimonial" class="pull-left avatar">
									<a href="#" class="name link-hover">Alexandra Jones</a>
									<ul class="person-social pushtop-10">
										<li>
											<a href="#"><i class="fa fa-facebook-f"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-dribbble"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-twitter"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="testimonial">
								<i class="fa fa-quote-left"></i>
								<p>
									“Consetetur sadipscing elitr, sed diam 
									nonumy eirmod tempor invidunt ut labore 
									et dolor erat, sed diam voluptua.”
								</p>
								<div class="testimonial-info pushtop-10">
									<img src="https://via.placeholder.com/65x65" alt="testimonial" class="pull-left avatar">
									<a href="#" class="name link-hover">Megan Novalum</a>
									<ul class="person-social pushtop-10">
										<li>
											<a href="#"><i class="fa fa-facebook-f"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-dribbble"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-twitter"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="testimonial">
								<i class="fa fa-quote-left"></i>
								<p>
									“At vero eos et accusam et justo duo dolores 
									et ea rebum. Stet clita kasd gubergren, 
									no sea takimata sanctus est lorem.”
								</p>
								<div class="testimonial-info pushtop-10">
									<img src="https://via.placeholder.com/65x65" alt="testimonial" class="pull-left avatar">
									<a href="#" class="name link-hover">John Alliston</a>
									<ul class="person-social pushtop-10">
										<li>
											<a href="#"><i class="fa fa-facebook-f"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-dribbble"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-twitter"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			
			<div class="widget progress-widget text-center pushtop-120">
				<p class="watermark-1">Progress</p>
				<p class="pretitle">WORKING PROGRESS</p>
				<h3>What we do</h3>

				<div class="row pushtop-60">
					<div class="col-md-4">
						<div class="progress-element">
							<img src="https://via.placeholder.com/580x310" alt="progress">
							<h6>User Experience Design</h6>
							<p>
								Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
								consetetur sadipscing elitr, sed diam nonumy eirmod.
							</p>
							<a href="#" class="button-link-2">
								EXPLORE SERVICE
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="progress-element">
							<img src="https://via.placeholder.com/580x310" alt="progress">
							<h6>Digital Design Innovation</h6>
							<p>
								At vero eos et accusam et justo duo dolores et ea 
								rebum. Stet clita kasd gubergren, no sea takimata.
							</p>
							<a href="#" class="button-link-2">
								EXPLORE SERVICE
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="progress-element">
							<img src="https://via.placeholder.com/580x310" alt="progress">
							<h6>Back-End Development</h6>
							<p>
								Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
								consetetur sadipscing elitr, sed diam nonumy eirmod.
							</p>
							<a href="#" class="button-link-2">
								EXPLORE SERVICE
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="portfolio-widget-1 pushtop-100 drag-up">
				<div class="top-section text-center">
					<p class="pretitle">CASE STUDIES</p>
					<h3>Our Portfolio</h3>
					<div class="portfolio-widget-1-tabs clearfix">
						<ul>
							<li><a href="#portfolio-widget-2-tab-content" class="active">ALL</a></li>
							<li><a href="#portfolio-widget-2-tab-content">WEBDESIGN</a></li>
							<li><a href="#portfolio-widget-2-tab-content">TYPO</a></li>
							<li><a href="#portfolio-widget-2-tab-content">BRANDING</a></li>
							<li><a href="#portfolio-widget-2-tab-content">DEVELOPMENT</a></li>
						</ul>
					</div>
				</div>
				<div id="portfolio-widget-2-tab-content">
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<a href="#" class="portfolio-item">
								<img src="https://via.placeholder.com/420x230" alt="blog">
								<div class="inner-wrapper">
									<div class="plus-sign"><span>+</span></div>
									<h6>User Experience Design</h6>
									<p>Graphic Design</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#" class="portfolio-item">
								<img src="https://via.placeholder.com/420x230" alt="blog">
								<div class="inner-wrapper">
									<div class="plus-sign"><span>+</span></div>
									<h6>Interior Technology</h6>
									<p>Webdesign</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#" class="portfolio-item">
								<img src="https://via.placeholder.com/420x230" alt="blog">
								<div class="inner-wrapper">
									<div class="plus-sign"><span>+</span></div>
									<h6>Illustration Design</h6>
									<p>Webdesign</p>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6">
							<a href="#" class="portfolio-item">
								<img src="https://via.placeholder.com/420x230" alt="blog">
								<div class="inner-wrapper">
									<div class="plus-sign"><span>+</span></div>
									<h6>Website Presentation</h6>
									<p>Webdesign</p>
								</div>
							</a>
						</div>
					</div>
					<a href="#" class="button-link-2">LOAD MORE</a>
				</div>
			</div>
		</div>

		<div class="container">
			
			<div class="partners-widget text-center pushtop-80 drag-this-up clearfix">
				<a href="#"><img src="https://via.placeholder.com/125x85" alt="partner"></a>
				<a href="#"><img src="https://via.placeholder.com/125x85" alt="partner"></a>
				<a href="#"><img src="https://via.placeholder.com/125x85" alt="partner"></a>
				<a href="#"><img src="https://via.placeholder.com/125x85" alt="partner"></a>
				<a href="#"><img src="https://via.placeholder.com/125x85" alt="partner"></a>
			</div>

			<div class="widget blog-widget pushtop-100">
				<p class="watermark-1 text-center">Blogposts</p>
				<p class="pretitle text-center">RECENT BLOGPOSTS</p>
				<h3 class="text-center">Latest News from the Blog</h3>

				<div class="row pushtop-70">
					<div class="col-md-4">
						<p class="pretitle">BUSINESS</p>
						<h6>As creatives, we often find it difficult ...</h6>
						<p>
							Ut wisi enim ad minim veniam, quis nostrud 
							exerci tation ullamcorper suscipit lobortis 
							nisl ut aliquip ex ea commodo consequat...
						</p>
						<hr>
						<div class="post-meta">
							<img src="https://via.placeholder.com/50x50" class="post-avatar" alt="avatar"/>
							<span>by</span>
							<a href="#">Alexandra Jones</a>
							<span>June 29, 2018</span>
						</div>
					</div>
					<div class="col-md-4">
						<p class="pretitle">BUSINESS</p>
						<h6>How you can improve business</h6>
						<p>
							Consetetur sadipscing elitr, sed diam nonumy 
							eirmod tempor invidunt ut labore et dolore
							magna aliquyam erat, sed diam voluptua...
						</p>
						<hr>
						<div class="post-meta">
							<img src="https://via.placeholder.com/50x50" class="post-avatar" alt="avatar"/>
							<span>by</span>
							<a href="#">Alexandra Jones</a>
							<span>June 29, 2018</span>
						</div>
					</div>
					<div class="col-md-4">
						<p class="pretitle">DESIGN</p>
						<h6>10 creative inspirational designs</h6>
						<p> 
							At vero eos et accusam et justo duo dolores 
							et ea rebum. Stet clita kasd gubergren, 
							no sea takimata sanctus est...
						</p>
						<hr>
						<div class="post-meta">
							<img src="https://via.placeholder.com/50x50" class="post-avatar" alt="avatar"/>
							<span>by</span>
							<a href="#">Alexandra Jones</a>
							<span>June 29, 2018</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="widget contact-widget clearfix pushtop-140">
			<div class="container">
				<p class="watermark-2 text-center">Contact</p>
				<p class="pretitle text-center">CONTACT FORM</p>
				<h3 class="text-center">Get in touch with us</h3>

				<div class="row pushtop-80">
					<div class="col-md-3">
						<label class="required-input">NAME</label>
						<div class="input-container">
							<input type="text" placeholder="your name" required/>
							<div class="input-bottom-line"></div>
						</div>
					</div>
					<div class="col-md-3">
						<label class="required-input">E-MAIL ADDRESS</label>
						<div class="input-container">
							<input type="email" placeholder="email@mail.com" required/>
							<div class="input-bottom-line"></div>
						</div>
					</div>
					<div class="col-md-3">
						<label>PHONE NUMBER</label>
						<div class="input-container">
							<input type="text" placeholder="+49 123 456 789" required/>
							<div class="input-bottom-line"></div>
						</div>
					</div>
					<div class="col-md-3">
						<label>SUBJECT</label>	
						<div class="input-container">
							<input type="text" placeholder="subject" required/>
							<div class="input-bottom-line"></div>
						</div>
					</div>
				</div>
				<label class="required-input">MESSAGE</label>
				<div class="input-container">
					<textarea placeholder="type in your message"></textarea>
					<div class="input-bottom-line"></div>
				</div>
				<input type="submit" value="Send Message" class="button-link-1 pull-right">
			</div>
		</div>

		<div id="googleMap"></div>
	</main>

	<footer>

		<a href="#" id="back-to-top">
			<img src="https://via.placeholder.com/137x31" alt="Back to top"/>
		</a>
	
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<a href="index.html" class="logo"><img src="https://via.placeholder.com/81x34" alt="pintu"></a>
					<p>
						Consetetur sadipscing elitr, sed diam nonumy 
						eirmod tempor invidunt ut labore etv oluptua
					</p>
					<ul class="social">
						<li><a class="facebook" href="#"><i class="fa fa-facebook-f"></i></a></li>
						<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a class="googleplus" href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
						<li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6">
					<h6>RECENT POSTS</h6>
					<ul class="footer-recent">
						<li>
							<a href="#" class="recent-title link-hover">How you can improve business</a>
							<div class="recent-info">
								<span>by</span>
								<a href="#">Alexandra Jones</a>
								<span>June 29, 2018</span>
							</div>
						</li>
						<li>
							<a href="#" class="recent-title link-hover">Inspirational design ideas</a>
							<div class="recent-info">
								<span>by</span>
								<a href="#">Alexandra Jones</a>
								<span>June 29, 2018</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6">
					<h6>GALLERY</h6>
					<ul class="instagram-feed pushtop-10">
						<li><a href="#"><img src="https://via.placeholder.com/64x65" alt="Instagram image"></a></li>
						<li><a href="#"><img src="https://via.placeholder.com/64x65" alt="Instagram image"></a></li>
						<li><a href="#"><img src="https://via.placeholder.com/64x65" alt="Instagram image"></a></li>
						<li><a href="#"><img src="https://via.placeholder.com/64x65" alt="Instagram image"></a></li>
						<li><a href="#"><img src="https://via.placeholder.com/64x65" alt="Instagram image"></a></li>
						<li><a href="#"><img src="https://via.placeholder.com/64x65" alt="Instagram image"></a></li>
						<li><a href="#"><img src="https://via.placeholder.com/64x65" alt="Instagram image"></a></li>
						<li><a href="#"><img src="https://via.placeholder.com/64x65" alt="Instagram image"></a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 contact-details">
					<h6>CONTACT US</h6>
					<p>
						Lorem ipsum dolor sit amet, cons- 
						etetur sadipscing elitr, sed diam.
					</p>
					<p class="footer-address clearfix pushtop-30"><i class="fa fa-map-marker"></i>127 Sith Avenue, 54571 NYC  
					<p class="footer-phone clearfix"><i class="fa fa-phone"></i>+49 123 456 789</p>
					<p class="footer-email clearfix"><span>@</span>email@mail.com </p>
				</div>
			</div>
		</div>
			
		<hr>

		<div class="footer-bottom">
			<div class="container">
				<p class="copyright-text">Copyright 2018 &copy; KL-Webmedia | All Rights Reserved</p>
			</div>
		</div>	

	</footer>







<script src='{{ asset('sample_1/lib/jquery/jquery.js') }}'></script>
<script src='{{ asset('sample_1/lib/jquery-ui/jquery-ui.min.js') }}'></script>
<script src='{{ asset('sample_1/lib/slick/slick.min.js') }}'></script>
<script src='{{ asset('sample_1/lib/isotope/isotope.pkgd.min.js') }}'></script>
<script src='{{ asset('sample_1/lib/visible/visible.js') }}'></script>
<script src='{{ asset('sample_1/js/main.js') }}'></script>
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7vWDDJMiSKbAxaU46pRjeuzWSWVEJGR8&amp;callback=myMap"></script> --}}
</body>
</html>