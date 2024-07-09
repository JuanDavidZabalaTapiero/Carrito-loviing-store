<?php

require_once (__DIR__ . '/productosController.php');
$objProductosController = new ProductosController();
$objProductosController->comprarProducto(1, 1, 5);