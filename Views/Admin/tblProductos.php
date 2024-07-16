<?php

// PARA CARGAR LA VARIABLE SESSION YA INICIADA
session_start();

$id_admin = $_SESSION["id_user"];

// CONTENIDO DEL ADMIN
require_once (__DIR__ . '/../../Controllers/Admin/contenidoAdmin.php');
$objContenidoAdmin = new ContenidoAdmin();

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
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tabla de productos</h5>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Stock</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $objContenidoAdmin->showTblProductos();
                                    ?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

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