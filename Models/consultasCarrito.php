<?php

require_once (__DIR__ . '/prepararConsulta.php');

class ConsultasCarrito
{
    public $objPrepararConsulta;

    public function __construct()
    {
        $this->objPrepararConsulta = new PrepararConsulta();
    }

    // CREATE
    public function insertCarrito($cod_cliente)
    {
        $insertCarrito = "INSERT INTO carrito(cod_cliente, compra_realizada) VALUES (:cod_cliente, :compra_realizada)";

        $compra_realizada = "No";

        $bindValues = [
            ':cod_cliente' => $cod_cliente,
            ':compra_realizada' => $compra_realizada
        ];

        $this->objPrepararConsulta->prepararConsulta($insertCarrito, $bindValues);

        echo 'CARRITO SIS';
    }

    // READ

    // UPDATE

    // DELETE
}