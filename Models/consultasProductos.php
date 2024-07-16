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
    public function insertProducto($nombre_producto, $stock_producto)
    {
        $insertProducto = "INSERT INTO productos(nombre, stock) VALUES (:nombre, :stock)";

        $bindValues = [
            ':nombre' => $nombre_producto,
            ':stock' => $stock_producto
        ];

        $this->objPrepararConsulta->prepararConsulta($insertProducto, $bindValues);

        echo 'Producto registrado';
    }

    // READ
    public function selectProducto($id_producto)
    {
        $selectProducto = "SELECT * FROM productos WHERE id_producto = :id_producto";

        $bindValues = [
            ':id_producto' => $id_producto
        ];

        $resultadoSelectProducto = $this->objPrepararConsulta->prepararConsulta($selectProducto, $bindValues);

        return $resultadoSelectProducto->fetch();
    }

    public function selectProductos()
    {
        // CONSULTA
        $selectProductos = "SELECT * FROM productos";

        $resultSelectProductos = $this->objPrepararConsulta->prepararConsulta($selectProductos, 0);

        if ($resultSelectProductos->rowCount() == 0) {
            return [
                'filas' => 0
            ];
        }

        if ($resultSelectProductos->rowCount() == 1) {
            return [
                'resultado' => $resultSelectProductos->fetch(),
                'filas' => 1
            ];
        } else {
            return [
                'resultados' => $resultSelectProductos->fetchAll(),
                'filas' => 2
            ];
        }
    }

    // UPDATE
    public function updateProducto($id_producto, $cantidad)
    {
        $updateProducto = "UPDATE productos SET stock = stock - :cantidad WHERE id_producto = :id_producto";

        $bindValues = [
            ':cantidad' => $cantidad,
            ':id_producto' => $id_producto
        ];

        $this->objPrepararConsulta->prepararConsulta($updateProducto, $bindValues);

        echo 'Stock del producto actualizado <br>';
    }

    // DELETE
}