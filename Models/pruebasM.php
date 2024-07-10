<?php

// require_once (__DIR__ . '/conexionBD.php');
// $objConexionBD = new ConexionBD();
// $objConexionBD->getConexion();

// require_once (__DIR__ . '/consultasProductos.php');
// $objConsultasProductos = new ConsultasProductos();
// $objConsultasProductos->selectProducto(1);

require_once (__DIR__ . '/consultasItemsCarrito.php');
$objConsultasItemsCarrito = new ConsultasItemsCarrito();
$objConsultasItemsCarrito->updateItemCarrito(1, 17, 7);

// require_once (__DIR__ . '/consultasCarrito.php');
// $objConsultasCarrito = new ConsultasCarrito();
// $objConsultasCarrito->updateCarrito(4);