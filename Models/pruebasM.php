<?php

// require_once (__DIR__ . '/conexionBD.php');
// $objConexionBD = new ConexionBD();
// $objConexionBD->getConexion();

// require_once (__DIR__ . '/consultasProductos.php');
// $objConsultasProductos = new ConsultasProductos();
// $objConsultasProductos->selectProductos();

// require_once (__DIR__ . '/consultasItemsCarrito.php');
// $objConsultasItemsCarrito = new ConsultasItemsCarrito();
// $objConsultasItemsCarrito->deleteItemCarrito(1, 1);

// require_once (__DIR__ . '/consultasCarrito.php');
// $objConsultasCarrito = new ConsultasCarrito();
// $objConsultasCarrito->updateCarrito(4);

require_once (__DIR__ . '/consultasUsuarios.php');
$objConsultasUsuarios = new ConsultasUsuarios();
$objConsultasUsuarios->selectUsuario('Juan');