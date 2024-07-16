<?php

// PARA CARGAR LA VARIABLE SESSION YA INICIADA
session_start();

$id_admin = $_SESSION["id_user"];

// CONTENIDO DEL ADMIN
require_once (__DIR__ . '/../../Controllers/Admin/contenidoAdmin.php');
$objContenidoAdmin = new ContenidoAdmin();

// PRODUCTOS CONTROLLER
require_once (__DIR__ . '/../../Controllers/Admin/productosController.php');
$objProductosController = new ProductosController();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $form = $_POST["form"];

    if ($form == "registrarProducto") {
        $nombre_producto = $_POST["nombre_producto"];
        $stock_producto = $_POST["stock_producto"];

        $objProductosController->registrarProducto($nombre_producto, $stock_producto);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php
    $objContenidoAdmin->showLinks();
    ?>

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php
    $objContenidoAdmin->showHeaderAdmin($id_admin);
    ?>

    <?php
    $objContenidoAdmin->showSidebarAdmin();
    ?>

    <main id="main" class="main">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registrar producto</h5>

                    <!-- General Form Elements -->
                    <form action="" method="post">
                        <input type="hidden" name="form" value="registrarProducto">

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nombre_producto">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Stock</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="stock_producto">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Submit Button</label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <?php
    $objContenidoAdmin->showFooterAdmin();
    ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <?php
    $objContenidoAdmin->showScriptsAdmin();
    ?>

</body>

</html>