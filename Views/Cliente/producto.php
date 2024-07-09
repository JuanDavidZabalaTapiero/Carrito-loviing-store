<?php

$id_cliente = 1;

$id_producto = 1;

// CONTENIDO CLIENTE
require_once (__DIR__ . '/../../Controllers/Cliente/contenidoCliente.php');
$objContenidoCliente = new ContenidoCliente();

// COMPRA
require_once (__DIR__ . '/../../Controllers/Cliente/compraController.php');
$objCompraController = new CompraController();

// AGREGAR ITEM AL CARRITO
require_once (__DIR__ . '/../../Controllers/Cliente/agregarItemCarritoController.php');
$objAgregarItemCarritoController = new AgregarItemCarritoController();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $form = $_POST["form"];

  $cantidad = $_POST["cantidad"];

  if ($form == "comprar") {
    $objCompraController->comprarProducto($id_cliente, $id_producto, $cantidad);
  }

  if ($form == "carrito") {
    $objAgregarItemCarritoController->agregarItemCarrito($id_cliente, $id_producto, $cantidad);
  }
}

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

  <?php
  $objContenidoCliente->showLinks();
  ?>

</head>

<body class="body-wrapper">
  <!-- HEADER -->
  <?php
  $objContenidoCliente->showHeader();
  ?>

  <!-- MAIN -->
  <?php
  $objContenidoCliente->showProducto($id_producto);
  ?>

  <!-- FOOTER -->

  <!-- SCRIPTS -->
   <?php
   $objContenidoCliente->showScripts();
   ?>

</body>

</html>