<?php

// require_once (__DIR__ . '/Cliente/compraController.php');

// require_once (__DIR__ . '/Cliente/contenidoCliente.php');
// $objContenidoCliente = new ContenidoCliente();

require_once (__DIR__ . '/Cliente/agregarItemCarritoController.php');
$objAgregarItemCarritoController = new AgregarItemCarritoController();
$objAgregarItemCarritoController->agregarItemCarrito(1, 1, 5);
