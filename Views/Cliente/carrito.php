<?php

$id_cliente = 1;

// CONTENIDO CLIENTE
require_once (__DIR__ . '/../../Controllers/Cliente/contenidoCliente.php');
$objContenidoCliente = new ContenidoCliente();

// COMPRAR CARRITO CONTROLLER
require_once (__DIR__ . '/../../Controllers/Cliente/comprarCarritoController.php');
$objComprarCarritoController = new ComprarCarritoController();

// UPDATE CANTIDAD DEL ITEM EN EL CARRITO CONTROLLER
require_once (__DIR__ . '/../../Controllers/Cliente/updateCantidadItemController.php');
$objUpdateCantidadItemController = new UpdateCantidadItemController();

// DELTE ITEM DEL CARRITO CONTROLLER
require_once (__DIR__ . '/../../Controllers/Cliente/deleteItemCarritoController.php');
$objDeleteItemCarritoController = new DeleteItemCarritoController();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $form = $_POST["form"];

    if ($form == "comprar_carrito") {
        $objComprarCarritoController->comprarCarrito($id_cliente);
    }

    if ($form == "cantidad_carrito") {
        $id_producto = $_POST["id_producto"];

        $cantidad = $_POST["cantidad"];

        $objUpdateCantidadItemController->updateCantidadItem($id_cliente, $id_producto, $cantidad);
    }

    if ($form == "delete_item") {
        $id_producto = $_POST["id_producto"];

        $objDeleteItemCarritoController->deleteItemCarrito($id_cliente, $id_producto);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- LINKS -->
    <?php
    $objContenidoCliente->showLinks();
    ?>
</head>

<body>
    <!-- HEADER -->
    <?php
    $objContenidoCliente->showHeader();
    ?>

    <!-- MAIN -->
    <?php
    $objContenidoCliente->showCarrito($id_cliente);
    ?>

    <!-- FOOTER -->

    <!-- SCRIPTS -->
    <?php
    $objContenidoCliente->showScripts();
    ?>
</body>

</html>