<?php

// require_once (__DIR__ . '/Cliente/compraController.php');

// require_once (__DIR__ . '/Cliente/contenidoCliente.php');
// $objContenidoCliente = new ContenidoCliente();

// require_once (__DIR__ . '/Cliente/agregarItemCarritoController.php');
// $objAgregarItemCarritoController = new AgregarItemCarritoController();
// $objAgregarItemCarritoController->agregarItemCarrito(1, 1, 7);

// require_once (__DIR__ . '/Cliente/comprarCarritoController.php');
// $objComprarCarritoController = new ComprarCarritoController();
// $objComprarCarritoController->comprarCarrito(1);

// require_once (__DIR__ . '/Cliente/updateCantidadItemController.php');
// $objUpdateCantidadItemController = new UpdateCantidadItemController();
// $objUpdateCantidadItemController->updateCantidadItem(1, 1, 9);

// require_once (__DIR__ . '/Cliente/deleteItemCarritoController.php');
// $objDeleteItemCarritoController = new DeleteItemCarritoController();
// $objDeleteItemCarritoController->deleteItemCarrito(1, 1);

require_once (__DIR__ . '/iniciarSesionController.php');
$objIniciarSesion = new IniciarSesionController();
$objIniciarSesion->iniciarSesion('Juan');