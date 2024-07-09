<?php

// require_once (__DIR__ . '/conexionBD.php');
// $objConexionBD = new ConexionBD();
// $objConexionBD->getConexion();

require_once (__DIR__ . '/consultasProductos.php');
$objConsultasProductos = new ConsultasProductos();
$objConsultasProductos->updateProducto(1, 5);