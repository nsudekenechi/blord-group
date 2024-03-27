<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Fundflex -
		<?= $title; ?>
	</title>
	<meta name="description" content="Insurin - Insurance Company HTML Template">
	<meta name="keywords"
		content="	accounting, advising, advisory, business, company, consulting, corporate, finance, financial, investments, law, multi-purpose, services, tax help, visual composer">
	<meta name="author" content="Kenechi Nsude">
	<link rel="shortcut icon" href="assets/IMG_0832-removebg-preview.png" type="image/x-icon">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/video.min.css">
	<link rel="stylesheet" href="assets/css/slick-theme.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/rs6.css">
	<link rel="stylesheet" href="assets/css/global.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</head>

<body>
	<div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>
	<?php

	if (isset ($_GET["ref"])) {
		session_start();
		$_SESSION["ref"] = $_GET["ref"];
	}
	$pages = ["login", "sign up", "forgot password"];
	$showHeader = true;
	foreach ($pages as $page) {
		if ($page == strtolower($title)) {
			$showHeader = false;
		}
	}
	if ($showHeader) {
		?>
		<!-- Start of header section
	============================================= -->
		<header id="in-header" class="in-header-section header-style-one">
			<!-- <div class="in-header-top-content-area">
			<div class="container">
				<div class="header-top-content d-flex justify-content-between align-items-center">
					<div class="brand-logo">
						<a href="#"><img src="assets/img/logo/logo-1.png" alt=""></a>
					</div>
					<div class="header-top-cta d-flex align-items-center">
						<div class="cta-info-item position-relative d-flex align-items-center">
							<div class="inner-icon">
								<i class="fal fa-map-marker-alt"></i>
							</div>
							<div class="inner-text headline">
								<h4>Contact us</h4>
								<span>25/2 Norda, Ukrain</span>
							</div>
						</div>
						<div class="cta-info-item position-relative d-flex align-items-center">
							<div class="inner-icon">
								<i class="fal fa-envelope-open-text"></i>
							</div>
							<div class="inner-text headline">
								<h4>Email us</h4>
								<span>info@insurin.com</span>
							</div>
						</div>
						<div class="cta-info-item position-relative d-flex align-items-center">
							<div class="inner-icon">
								<i class="fal fa-phone-plus"></i>
							</div>
							<div class="inner-text headline">
								<h4>Free Call</h4>
								<span>(+02) - 23456789</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
			<div class="in-header-main-menu-wrapper">
				<div class="container">
					<div class="in-header-main-menu-content d-flex align-items-center justify-content-between">
						<div class="sticky-logo">
							<a href="./" style="display:block;position:relative;">
								<h1>Fundfl<span class='in-text-gradiant'>ex</span></h1>
							</a>
						</div>
						<nav class="in-main-navigation-area clearfix ul-li">
							<ul id="main-nav" class="nav navbar-nav clearfix">
								<li class="dropdown in-megamenu">
									<a href="./index.php">Home</a>

								</li>
								<li><a target="" href="about.php">About Us</a></li>

								<li><a target="" href="pricing.php">Pricing</a></li>
								<li><a target="" href="service.php">Services</a></li>
								<li><a target="" href="faq.php">FAQ</a></li>
								<!-- <li class="dropdown">
								<a href="!#">Shop</a>
								<ul class="dropdown-menu clearfix">
									<li><a target="" href="shop.html">Shop Page </a></li>
									<li><a target="" href="shop-single.html">Shop Details</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="!#">Pages</a>
								<ul class="dropdown-menu clearfix">
									<li><a target="" href="service.php">Services</a></li>
									<li><a target="" href="service-2.html">Service Page 2</a></li>
									<li class="dropdown">
										<a href="service-single.html">Services Details</a>
										<ul class="dropdown-menu clearfix">
											<li><a target="" href="service-single.html">Life Insurence</a></li>
											<li><a target="" href="service-single.html">Health Insurence</a></li>
											<li><a target="" href="service-single.html">Car Insurence</a></li>
											<li><a target="" href="service-single.html">Home Insurence</a></li>
											<li><a target="" href="service-single.html">Credit Insurence</a></li>
											<li><a target="" href="service-single.html">Transport Insurence</a></li>
											<li><a target="" href="service-single.html">Energy Insurence</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="!#">Testimonial</a>
										<ul class="dropdown-menu clearfix">
											<li><a target="" href="testimonial.html">Testimonial</a></li>
											<li><a target="" href="testimonial-carousel.html">Testimonial Carousel</a></li>
											
										</ul>
									</li>
									<li><a target="" href="team.html">Team Page</a></li>
									<li><a target="" href="team-single.html">Team Details</a></li>
									<li><a target="" href="faq.php">FAQ Page</a></li>
									<li><a target=""  href="pricing.php">Pricing Page</a></li>
									<li><a target="" href="contact.html">Contact Page</a></li>
									<li><a target="" href="insurance-calculator.html">Insurence Calculator</a></li>
									<li><a target="" href="404.html">404</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="" href="!#">Blog</a>
								<ul class="dropdown-menu clearfix">
									<li><a target="" href="blog-list.html">News </a></li>
									<li><a target="" href="blog-grid.html">News Grid</a></li>
									<li><a target="" href="blog-list-2.html">News List</a></li>
									<li><a target="" href="blog-slider.html">News Slider</a></li>
									<li><a target="" href="blog-single.html">News Details</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="" href="!#">Portfolio</a>
								<ul class="dropdown-menu clearfix">
									<li><a target="" href="portfolio-slide.html">Portfolio Slide </a></li>
									<li><a target="" href="portfolio-grid.html">Portfolio Grid</a></li>
									<li><a target="" href="portfolio-masonry.html">Porfolio Masonry</a></li>
									<li><a target="" href="portfolio-single.html">Portfolio Details</a></li>
								</ul>
							</li> -->
							</ul>
						</nav>
						<div class="in-header-search-cta-btn d-flex align-items-center">

							<div class="in-header-cta-btn">

								<a href="./login.php" style="background:#015fea;color:white">Login</a>

							</div>
						</div>
					</div>
					<div class="mobile_menu position-relative">
						<div class="mobile_menu_button open_mobile_menu">
							<i class="fal fa-bars"></i>
						</div>
						<div class="mobile_menu_wrap">
							<div class="mobile_menu_overlay open_mobile_menu"></div>
							<div class="mobile_menu_content">
								<div class="mobile_menu_close open_mobile_menu">
									<i class="fal fa-times"></i>
								</div>
								<div class="m-brand-logo">
									<a href="!#"><img src="assets/img/logo/logo-1.png" alt=""></a>
								</div>
								<div class="in-m-search">
									<form action="#">
										<input type="text" name="search" placeholder="Search..">
										<button type="submit"><i class="far fa-search"></i></button>
									</form>
								</div>
								<nav class="mobile-main-navigation  clearfix ul-li">
									<ul id="m-main-nav" class="nav navbar-nav clearfix">
										<li class="dropdown in-megamenu">
											<a href="!#">Home</a>
											<ul class="dropdown-menu clearfix">
												<li>
													<div class="in-megamenu-content">
														<div class="in-megamenu-item-wrap">
															<div class="row justify-content-center">
																<div class="col-md-3">
																	<div class="in-megamenu-item position-relative">
																		<div class="in-megamenu-item-btn position-relative">
																			<img src="assets/img/gallery/dm1.jpg" alt="">
																			<div class="in-menu-btn-grp text-center">
																				<a target="" href="index-1.html">View
																					Now</a></a>
																			</div>
																		</div>
																		<h3>Home One</h3>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="in-megamenu-item position-relative">
																		<div class="in-megamenu-item-btn position-relative">
																			<img src="assets/img/gallery/dm2.jpg" alt="">
																			<div class="in-menu-btn-grp text-center">
																				<a target="" href="index-2.html">View
																					Now</a>
																			</div>
																		</div>
																		<h3>Home Two</h3>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="in-megamenu-item position-relative">
																		<div class="in-megamenu-item-btn position-relative">
																			<img src="assets/img/gallery/dm3.jpg" alt="">
																			<div class="in-menu-btn-grp text-center">
																				<a target="" href="index-3.html">View
																					Now</a>
																			</div>
																		</div>
																		<h3>Home Three</h3>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="in-megamenu-item position-relative">
																		<div class="in-megamenu-item-btn position-relative">
																			<img src="assets/img/gallery/dm4.jpg" alt="">
																			<div class="in-menu-btn-grp text-center">
																				<a target="" href="index-4.html">View
																					Now</a>
																			</div>
																		</div>
																		<h3>Home Four</h3>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="in-megamenu-item position-relative">
																		<div class="in-megamenu-item-btn position-relative">
																			<img src="assets/img/gallery/dm5.jpg" alt="">
																			<div class="in-menu-btn-grp text-center">
																				<a target="" href="index-5.html">View
																					Now</a>
																			</div>
																		</div>
																		<h3>Home Five</h3>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="in-megamenu-item position-relative">
																		<div class="in-megamenu-item-btn position-relative">
																			<img src="assets/img/gallery/dm6.jpg" alt="">
																			<div class="in-menu-btn-grp text-center">
																				<a target="" href="index-6.html">View
																					Now</a>
																			</div>
																		</div>
																		<h3>Home Six</h3>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="in-megamenu-item position-relative">
																		<div class="in-megamenu-item-btn position-relative">
																			<img src="assets/img/gallery/dm7.jpg" alt="">
																			<div class="in-menu-btn-grp text-center">
																				<a target="" href="index-7.html">View
																					Now</a>
																			</div>
																		</div>
																		<h3>Home Seven</h3>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li><a target="" href="about.php">About Us</a></li>
										<li class="dropdown">
											<a href="!#">Shop</a>
											<ul class="dropdown-menu clearfix">
												<li><a target="" href="shop.html">Shop Page </a></li>
												<li><a target="" href="shop-single.html">Shop Details</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="!#">Pages</a>
											<ul class="dropdown-menu clearfix">
												<li><a target="" href="service.php">Services</a></li>
												<li><a target="" href="service-2.html">Service Page 2</a></li>
												<li class="dropdown">
													<a href="service-single.html">Services Details</a>
													<ul class="dropdown-menu clearfix">
														<li><a target="" href="service-single.html">Life Insurence</a></li>
														<li><a target="" href="service-single.html">Health Insurence</a>
														</li>
														<li><a target="" href="service-single.html">Car Insurence</a></li>
														<li><a target="" href="service-single.html">Home Insurence</a></li>
														<li><a target="" href="service-single.html">Credit Insurence</a>
														</li>
														<li><a target="" href="service-single.html">Transport Insurence</a>
														</li>
														<li><a target="" href="service-single.html">Energy Insurence</a>
														</li>
													</ul>
												</li>
												<li class="dropdown">
													<a href="!#">Testimonial</a>
													<ul class="dropdown-menu clearfix">
														<li><a target="" href="testimonial.html">Testimonial</a></li>
														<li><a target="" href="testimonial-carousel.html">Testimonial
																Carousel</a></li>

													</ul>
												</li>
												<li><a target="" href="team.html">Team Page</a></li>
												<li><a target="" href="team-single.html">Team Details</a></li>
												<li><a target="" href="faq.php">FAQ Page</a></li>
												<li><a target="" href="pricing.php">Pricing Page</a></li>
												<li><a target="" href="contact.html">Contact Page</a></li>
												<li><a target="" href="insurance-calculator.html">Insurence Calculator</a>
												</li>
												<li><a target="" href="404.html">404</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a class="" href="!#">Blog</a>
											<ul class="dropdown-menu clearfix">
												<li><a target="" href="blog-list.html">News </a></li>
												<li><a target="" href="blog-grid.html">News Grid</a></li>
												<li><a target="" href="blog-list-2.html">News List</a></li>
												<li><a target="" href="blog-slider.html">News Slider</a></li>
												<li><a target="" href="blog-single.html">News Details</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a class="" href="!#">Portfolio</a>
											<ul class="dropdown-menu clearfix">
												<li><a target="" href="portfolio-slide.html">Portfolio Slide </a></li>
												<li><a target="" href="portfolio-grid.html">Portfolio Grid</a></li>
												<li><a target="" href="portfolio-masonry.html">Porfolio Masonry</a></li>
												<li><a target="" href="portfolio-single.html">Portfolio Details</a></li>
											</ul>
										</li>
									</ul>
								</nav>
							</div>
						</div>
						<!-- /Mobile-Menu -->
					</div>
				</div>
			</div>
		</header>
		<!-- search filed -->
		<div class="search-body">
			<div class="search-form">
				<form action="#" class="search-form-area">
					<input class="search-input" type="search" placeholder="Search Here">
					<button type="submit" class="search-btn1">
						<i class="fas fa-search"></i>
					</button>
				</form>
				<div class="outer-close text-center search-btn">
					<i class="fas fa-times"></i>
				</div>
			</div>
		</div>
		<!-- End of header section
	============================================= -->
		<?php
	}
	?>