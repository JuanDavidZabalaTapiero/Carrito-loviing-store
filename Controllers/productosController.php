<?php

require_once (__DIR__ . '/../Models/consultasProductos.php');

class ProductosController{
    public $objConsultasProductos;

    public function __construct(){
        $this->objConsultasProductos = new ConsultasProductos();
    }

    public function comprarProducto($id_producto, $cantidad){
        // ACTUALIZO EL STOCK
        $this->objConsultasProductos->updateProducto($id_producto, $cantidad);
    }
}