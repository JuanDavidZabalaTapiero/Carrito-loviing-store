<?php

// MAIN CONTENIDO
require_once (__DIR__ . '/Controllers/contenidoMain.php');
$objContenidoMain = new ContenidoMain();

?>
<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

	<!-- ** Basic Page Needs ** -->
	<meta charset="utf-8">
	<title>Classimax | Classified Marketplace Template</title>

	<!-- ** Mobile Specific Metas ** -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Agency HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<meta name="author" content="Themefisher">
	<meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

	<!-- theme meta -->
	<meta name="theme-name" content="classimax" />

	<!-- favicon -->
	<link href="Views/website_externo/images/favicon.png" rel="shortcut icon">

	<!-- Essential stylesheets
	 =====================================-->
	<link href="Views/website_externo/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="Views/website_externo/plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
	<link href="Views/website_externo/plugins/slick/slick.css" rel="stylesheet">
	<link href="Views/website_externo/plugins/slick/slick-theme.css" rel="stylesheet">
	<link href="Views/website_externo/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

	<!-- FONTAWESOME CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
		integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link href="Views/website_externo/css/style.css" rel="stylesheet">

	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body class="body-wrapper">

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light navigation">
						<a class="navbar-brand" href="index.php">
							<h2>Loviing Store</h2>
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse"
							data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto main-nav ">
								<li class="nav-item active">
									<a class="nav-link" href="index.php">Inicio</a>
								</li>

								<li class="nav-item dropdown dropdown-slide @@pages">
									<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false">
										Extra<span><i class="fa fa-angle-down"></i></span>
									</a>
									<!-- Dropdown list -->
									<ul class="dropdown-menu">
										<li><a class="dropdown-item @@about" href="about-us.html">Sobre nosotros</a>
										</li>
										<li><a class="dropdown-item @@contact" href="contact-us.html">Contacto</a>
										</li>
										<li><a class="dropdown-item @@terms" href="terms-condition.html">Términos y
												condiciones</a></li>
									</ul>
								</li>

							</ul>
							<ul class="navbar-nav ml-auto mt-10">
								<li class="nav-item">
									<a class="nav-link login-button" href="Views/Extras/iniciarSesion.php">Login</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white add-button" href="ad-listing.html"><i
											class="fa fa-plus-circle"></i> Add Listing</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<!--===============================
	=            Hero Area            =
	================================-->

	<section class="hero-area bg-1 text-center overly">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Header Contetnt -->
					<div class="content-block">
						<h1>Loviing Store</h1>
						<p>Tienda Online</p>
					</div>
					<!-- Advance Search -->
					<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 align-content-center">
									<form>
										<div class="form-row">
											<div class="form-group col-xl-6 col-lg-4 col-md-12">
												<input type="text" class="form-control my-2 my-lg-1" id="inputtext4"
													placeholder="What are you looking for">
											</div>
											<div class="form-group col-xl-4 col-lg-4 col-md-12">
												<select class="w-100 form-control mt-lg-1 mt-md-2">
													<option>Category</option>
													<option value="1">Top rated</option>
													<option value="2">Lowest Price</option>
													<option value="4">Highest Price</option>
												</select>
											</div>
											<div class="form-group col-xl-2 col-lg-4 col-md-12 align-self-center">
												<button type="submit" class="btn btn-primary active w-100">Search
													Now</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>


	<!--===========================================
	=            Popular deals section            =
	============================================-->

	<section class="popular-deals section bg-gray">
		<div class="container">
			<div class="row">
				<!-- offer 01 -->
				<div class="col-lg-12">
					<div class="trending-ads-slide">
						<?php
						$objContenidoMain->showMainProducts();
						?>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!--==========================================
	=            All Category Section            =
	===========================================-->

	<section class=" section">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Section title -->
					<div class="section-title">
						<h2>All Categories</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p>
					</div>
					<div class="row">
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-laptop icon-bg-1"></i>
									<h4>Electronics</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Laptops <span>93</span></a></li>
									<li><a href="category.html">Iphone <span>233</span></a></li>
									<li><a href="category.html">Microsoft <span>183</span></a></li>
									<li><a href="category.html">Monitors <span>343</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-apple icon-bg-2"></i>
									<h4>Restaurants</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Cafe <span>393</span></a></li>
									<li><a href="category.html">Fast food <span>23</span></a></li>
									<li><a href="category.html">Restaurants <span>13</span></a></li>
									<li><a href="category.html">Food Track<span>43</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-home icon-bg-3"></i>
									<h4>Real Estate</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Farms <span>93</span></a></li>
									<li><a href="category.html">Gym <span>23</span></a></li>
									<li><a href="category.html">Hospitals <span>83</span></a></li>
									<li><a href="category.html">Parolurs <span>33</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-shopping-basket icon-bg-4"></i>
									<h4>Shoppings</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Mens Wears <span>53</span></a></li>
									<li><a href="category.html">Accessories <span>212</span></a></li>
									<li><a href="category.html">Kids Wears <span>133</span></a></li>
									<li><a href="category.html">It & Software <span>143</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-briefcase icon-bg-5"></i>
									<h4>Jobs</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">It Jobs <span>93</span></a></li>
									<li><a href="category.html">Cleaning & Washing <span>233</span></a></li>
									<li><a href="category.html">Management <span>183</span></a></li>
									<li><a href="category.html">Voluntary Works <span>343</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-car icon-bg-6"></i>
									<h4>Vehicles</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Bus <span>193</span></a></li>
									<li><a href="category.html">Cars <span>23</span></a></li>
									<li><a href="category.html">Motobike <span>33</span></a></li>
									<li><a href="category.html">Rent a car <span>73</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">
								<div class="header">
									<i class="fa fa-paw icon-bg-7"></i>
									<h4>Pets</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Cats <span>65</span></a></li>
									<li><a href="category.html">Dogs <span>23</span></a></li>
									<li><a href="category.html">Birds <span>113</span></a></li>
									<li><a href="category.html">Others <span>43</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->
						<!-- Category list -->
						<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6">
							<div class="category-block">

								<div class="header">
									<i class="fa fa-laptop icon-bg-8"></i>
									<h4>Services</h4>
								</div>
								<ul class="category-list">
									<li><a href="category.html">Cleaning <span>93</span></a></li>
									<li><a href="category.html">Car Washing <span>233</span></a></li>
									<li><a href="category.html">Clothing <span>183</span></a></li>
									<li><a href="category.html">Business <span>343</span></a></li>
								</ul>
							</div>
						</div> <!-- /Category List -->


					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>


	<!--====================================
	=            Call to Action            =
	=====================================-->

	<section class="call-to-action overly bg-3 section-sm">
		<!-- Container Start -->
		<div class="container">
			<div class="row justify-content-md-center text-center">
				<div class="col-md-8">
					<div class="content-holder">
						<h2>Start today to get more exposure and
							grow your business</h2>
						<ul class="list-inline mt-30">
							<li class="list-inline-item"><a class="btn btn-main" href="ad-listing.html">Add Listing</a>
							</li>
							<li class="list-inline-item"><a class="btn btn-secondary" href="category.html">Browser
									Listing</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>

	<!--============================
	=            Footer            =
	=============================-->

	<footer class="footer section section-sm">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0 mb-4 mb-lg-0">
					<!-- About -->
					<div class="block about">
						<!-- footer logo -->
						<img src="Views/website_externo/images/logo-footer.png" alt="logo">
						<!-- description -->
						<p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor
							incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
							exercitation ullamco
							laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				<!-- Link list -->
				<div class="col-lg-2 offset-lg-1 col-md-3 col-6 mb-4 mb-lg-0">
					<div class="block">
						<h4>Site Pages</h4>
						<ul>
							<li><a href="dashboard-my-ads.html">My Ads</a></li>
							<li><a href="dashboard-favourite-ads.html">Favourite Ads</a></li>
							<li><a href="dashboard-archived-ads.html">Archived Ads</a></li>
							<li><a href="dashboard-pending-ads.html">Pending Ads</a></li>
							<li><a href="terms-condition.html">Terms & Conditions</a></li>
						</ul>
					</div>
				</div>
				<!-- Link list -->
				<div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0 col-6 mb-4 mb-md-0">
					<div class="block">
						<h4>Admin Pages</h4>
						<ul>
							<li><a href="category.html">Category</a></li>
							<li><a href="single.html">Single Page</a></li>
							<li><a href="store.html">Store Single</a></li>
							<li><a href="single-blog.html">Single Post</a>
							</li>
							<li><a href="blog.html">Blog</a></li>



						</ul>
					</div>
				</div>
				<!-- Promotion -->
				<div class="col-lg-4 col-md-7">
					<!-- App promotion -->
					<div class="block-2 app-promotion">
						<div class="mobile d-flex  align-items-center">
							<a href="index.html">
								<!-- Icon -->
								<img src="Views/website_externo/images/footer/phone-icon.png" alt="mobile-icon">
							</a>
							<p class="mb-0">Get the Dealsy Mobile App and Save more</p>
						</div>
						<div class="download-btn d-flex my-3">
							<a href="index.html"><img src="Views/website_externo/images/apps/google-play-store.png"
									class="img-fluid" alt=""></a>
							<a href="index.html" class=" ml-3"><img
									src="Views/website_externo/images/apps/apple-app-store.png" class="img-fluid"
									alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->

	</footer>
	<!-- Footer Bottom -->
	<footer class="footer-bottom">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
					<!-- Copyright -->
					<div class="copyright">
						<p>Copyright &copy;
							<script>
								var CurrentYear = new Date().getFullYear()
								document.write(CurrentYear)
							</script>. Designed & Developed by <a class="text-white" href="https://themefisher.com">Themefisher</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<!-- Social Icons -->
					<ul class="social-media-icons text-center text-lg-right">
						<li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher"></a></li>
						<li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher"></a></li>
						<li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher"></a></li>
						<li><a class="fa fa-github-alt" href="https://www.github.com/themefisher"></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Container End -->
		<!-- To Top -->
		<div class="scroll-top-to">
			<i class="fa fa-angle-up"></i>
		</div>
	</footer>

	<!-- Essential Scripts
	 =====================================-->
	<script src="Views/website_externo/plugins/jquery/jquery.min.js"></script>
	<script src="Views/website_externo/plugins/bootstrap/popper.min.js"></script>
	<script src="Views/website_externo/plugins/bootstrap/bootstrap.min.js"></script>
	<script src="Views/website_externo/plugins/bootstrap/bootstrap-slider.js"></script>
	<script src="Views/website_externo/plugins/tether/js/tether.min.js"></script>
	<script src="Views/website_externo/plugins/raty/jquery.raty-fa.js"></script>
	<script src="Views/website_externo/plugins/slick/slick.min.js"></script>
	<script src="Views/website_externo/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>

	<!-- google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
	<script src="../website_externo/plugins/google-map/map.js" defer></script>

	<script src="Views/website_externo/js/script.js"></script>

</body>

</html>