<?php

// require_once (__DIR__ . '/conexionBD.php');
// $objConexionBD = new ConexionBD();
// $objConexionBD->getConexion();

// require_once (__DIR__ . '/consultasProductos.php');
// $objConsultasProductos = new ConsultasProductos();

require_once (__DIR__ . '/consultasItemsCarrito.php');
$objConsultasItemsCarrito = new ConsultasItemsCarrito();
$objConsultasItemsCarrito->insertItemCarrito(1, 1, 5);