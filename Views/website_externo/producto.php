<?php

// ID DEL PRODUCTO
$id_producto = $_GET["id_producto"];

// CONTENIDO CLIENTE
require_once (__DIR__ . '/../../Controllers/Cliente/contenidoCliente.php');
$objContenidoCliente = new ContenidoCliente();

// CONTENIDO MAIN
require_once (__DIR__ . '/../../Controllers/contenidoMain.php');
$objContenidoMain = new ContenidoMain();

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
    $links = [
        'index.php' => '../../index.php',
        'iniciarSesion.php' => '../Extras/iniciarSesion.php'
    ];

    $objContenidoMain->showMainHeader($links);
    ?>

    <?php
    $objContenidoCliente->showProducto($id_producto);
    ?>

    <!-- FOOTER -->
    <?php
    $objContenidoMain->showMainFooter();
    ?>

    <!-- SCRIPTS -->
    <?php
    $objContenidoCliente->showScripts();
    ?>
</body>

</html>