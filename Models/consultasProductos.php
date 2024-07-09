<?php

require_once (__DIR__ . '/prepararConsulta.php');

class ConsultasProductos
{
    public $objPrepararConsulta;

    public function __construct()
    {
        $this->objPrepararConsulta = new PrepararConsulta();
    }

    // CREATE

    // READ

    // UPDATE
    public function updateProducto($id_producto, $cantidad)
    {
        $updateProducto = "UPDATE productos SET stock = stock - :cantidad WHERE id_producto = :id_producto";

        $bindValues = [
            ':cantidad' => $cantidad,
            ':id_producto' => $id_producto
        ];

        $this->objPrepararConsulta->prepararConsulta($updateProducto, $bindValues);

        echo 'Producto act';
    }

    // DELETE
}