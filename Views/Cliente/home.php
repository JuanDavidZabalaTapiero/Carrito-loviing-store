<?php
// PARA SEGURIDAD
require_once (__DIR__ . '/../../Controllers/seguridadAccesoController.php');

$current_page_name = basename($_SERVER['PHP_SELF']);

// CONTENIDO CLIENTE
require_once (__DIR__ . '/../../Controllers/Cliente/contenidoCliente.php');
$objContenidoCliente = new ContenidoCliente();

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

	<!-- LINKS -->
	<?php
	$objContenidoCliente->showLinks();
	?>

</head>

<body class="body-wrapper">

	<!-- HEADER -->
	<?php
	$objContenidoCliente->showHeader($current_page_name);
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
						$objContenidoCliente->showHomeProducts();
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

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
							</script> Loviing Store
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<!-- Social Icons -->
					<ul class="social-media-icons text-center text-lg-right">
						<li><a class="fa-brands fa-facebook-f" href="https://www.facebook.com/themefisher"></a></li>
						<li><a class="fa-brands fa-x-twitter" href="https://www.twitter.com/themefisher"></a></li>
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

	<?php
	$objContenidoCliente->showScripts();
	?>

</body>

</html>