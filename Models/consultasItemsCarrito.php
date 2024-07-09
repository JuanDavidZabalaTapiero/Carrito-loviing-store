<?php

require_once (__DIR__ . '/prepararConsulta.php');

class ConsultasItemsCarrito
{
    public $objPrepararConsulta;

    public function __construct()
    {
        $this->objPrepararConsulta = new PrepararConsulta();
    }

    // CREATE
    public function insertItemCarrito($cod_carrito, $cod_producto, $cantidad)
    {
        $insertItemCarrito = "INSERT INTO items_carrito(cod_carrito, cod_producto, cantidad) VALUES ( :cod_carrito, :cod_producto, :cantidad)";

        $bindValues = [
            ':cod_carrito' => $cod_carrito,
            ':cod_producto' => $cod_producto,
            ':cantidad' => $cantidad
        ];

        $this->objPrepararConsulta->prepararConsulta($insertItemCarrito, $bindValues);

        echo 'ITEM SIS';
    }

    // READ

    // UPDATE

    // DELETE
}