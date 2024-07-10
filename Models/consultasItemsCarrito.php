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

        echo 'Se inserto el item en el carrito <br>';
    }

    // READ
    public function selectItemsCarrito($cod_carrito)
    {
        $selectItemsCarrito = "SELECT * FROM 
        items_carrito ic
        INNER JOIN productos p ON ic.cod_producto = p.id_producto
        WHERE cod_carrito = :cod_carrito";

        $bindValues = [
            ':cod_carrito' => $cod_carrito
        ];

        $resultSelectItemsCarrito = $this->objPrepararConsulta->prepararConsulta($selectItemsCarrito, $bindValues);

        if ($resultSelectItemsCarrito->rowCount() == 0) {
            return [
                'filas' => 0
            ];
        }

        if ($resultSelectItemsCarrito->rowCount() == 1) {
            return [
                'resultado' => $resultSelectItemsCarrito->fetch(),
                'filas' => 1
            ];

        } else {
            return [
                'resultados' => $resultSelectItemsCarrito->fetchAll(),
                'filas' => 2
            ];
        }
    }

    public function selectItemCarrito($cod_producto, $cod_carrito)
    {
        $selectItemCarrito = "SELECT * FROM items_carrito WHERE cod_producto = :cod_producto AND cod_carrito = :cod_carrito";

        $bindValues = [
            ':cod_producto' => $cod_producto,
            ':cod_carrito' => $cod_carrito
        ];

        $resultSelectItemCarrito = $this->objPrepararConsulta->prepararConsulta($selectItemCarrito, $bindValues);

        return $resultSelectItemCarrito->fetch();
    }

    // UPDATE
    public function updateItemCarrito($cod_producto, $cod_carrito, $cantidad)
    {
        $updateItemCarrito = "UPDATE items_carrito SET cantidad = :cantidad WHERE cod_producto = :cod_producto AND cod_carrito = :cod_carrito";

        $bindValues = [
            ':cod_producto' => $cod_producto,
            ':cod_carrito' => $cod_carrito,
            ':cantidad' => $cantidad
        ];

        $this->objPrepararConsulta->prepararConsulta($updateItemCarrito, $bindValues);

        echo 'Se actualizo la cantidad del producto en el carrito <br>';

    }

    // DELETE
}