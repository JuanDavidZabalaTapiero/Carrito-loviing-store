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
	<?php
	$links = [
		'index.php' => 'index.php',
		'iniciarSesion.php' => 'Views/Extras/iniciarSesion.php'
	];

	$objContenidoMain->showMainHeader($links);
	?>

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
													placeholder="Busca tus productos aquí">
											</div>
											<div class="form-group col-xl-4 col-lg-4 col-md-12">
												<select class="w-100 form-control mt-lg-1 mt-md-2">
													<option>Categorías</option>
													<option value="1">Top rated</option>
													<option value="2">Lowest Price</option>
													<option value="4">Highest Price</option>
												</select>
											</div>
											<div class="form-group col-xl-2 col-lg-4 col-md-12 align-self-center">
												<button type="submit"
													class="btn btn-primary active w-100">Buscar</button>
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

	<!-- Footer Bottom -->
	<?php
	$objContenidoMain->showMainFooter();
	?>

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