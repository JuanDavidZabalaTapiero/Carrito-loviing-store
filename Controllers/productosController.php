<?php

require_once (__DIR__ . '/../Models/consultasProductos.php');

require_once (__DIR__ . '/../Models/consultasCarrito.php');

require_once (__DIR__ . '/../Models/consultasItemsCarrito.php');

class ProductosController
{
    // CONSULTAS DE PRODUCTOS
    public $objConsultasProductos;

    // CONSULTAS DE CARRITO
    public $objConsultasCarrito;

    // CONSULTAS DE ITEMS_CARRITO
    public $objConsultasItemsCarrito;

    public function __construct()
    {
        $this->objConsultasProductos = new ConsultasProductos();
        $this->objConsultasCarrito = new ConsultasCarrito();
        $this->objConsultasItemsCarrito = new ConsultasItemsCarrito();
    }

    public function comprarProducto($id_cliente, $id_producto, $cantidad)
    {
        // VERIFICO QUE EL CARRITO EXISTA
        $fCarrito = $this->objConsultasCarrito->selectCarrito($id_cliente);

        if (!$fCarrito) {
            // CREO EL CARRITO Y OBTENGO SU ID
            $id_carrito = $this->objConsultasCarrito->insertCarrito($id_cliente);
        } else {
            $id_carrito = $fCarrito["id_carrito"];
        }

        // INSERTO EL ITEM EN EL CARRITO
        $this->objConsultasItemsCarrito->insertItemCarrito($id_carrito, $id_producto, $cantidad);

        // ACTUALIZO EL ESTADO DEL CARRITO
        $this->objConsultasCarrito->updateCarrito($id_carrito);

        // ACTUALIZO EL STOCK DEL PRODUCTO
        $this->objConsultasProductos->updateProducto($id_producto, $cantidad);
    }
}