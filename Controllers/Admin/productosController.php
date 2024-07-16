<?php

require_once (__DIR__ . '/../../Models/consultasProductos.php');

class ProductosController
{
    public $objConsultasProductos;

    public function __construct()
    {
        $this->objConsultasProductos = new ConsultasProductos();
    }
    public function registrarProducto($nombre_producto, $stock_producto)
    {
        $this->objConsultasProductos->insertProducto($nombre_producto, $stock_producto);

        header("location: ../../Views/Admin/tblProductos.php");
    }
}