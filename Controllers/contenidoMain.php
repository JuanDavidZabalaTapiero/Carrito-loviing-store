<?php

// PRODUCTOS
require_once (__DIR__ . '/../Models/consultasProductos.php');

class ContenidoMain
{
    // PARA CONSULTAS DE PRODUCTOS
    public $objConsultasProductos;

    public function __construct()
    {
        $this->objConsultasProductos = new ConsultasProductos();
    }

    public function showMainProducts()
    {
        // CONSULTO TODOS LOS PRODUCTOS
        $arraySelectProductos = $this->objConsultasProductos->selectProductos();

        $filas = $arraySelectProductos['filas'];

        // SI NO HAY PRODUCTOS
        if ($filas == 0) {
            ?>
            <p>No hay productos registrados</p>
            <?php
        }

        // SI HAY SOLO 1 PRODUCTO
        if ($filas == 1) {

            // FETCH DEL PRODUCTO
            $fProducto = $arraySelectProductos['resultado'];

            $stock = $fProducto["stock"];

            // VERIFICO SI EL STOCK DEL PRODUCTO ES 0
            if ($stock == 0) {

            } else {
                ?>
                <div class="col-sm-12 col-lg-12">
                    <!-- product card -->
                    <div class="product-item bg-light">
                        <div class="card">
                            <div class="thumb-content">
                                <!-- <div class="price">$200</div> -->
                                <a href="producto.php?id_producto=<?php echo $fProducto["id_producto"] ?>">
                                    <img class="card-img-top img-fluid" src="https://i.imgur.com/1LTqG21.png"
                                        alt="Card image cap">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><a href="single.html"><?php echo $fProducto["nombre"] ?></a></h4>
                                <ul class="list-inline product-meta">
                                    <li class="list-inline-item">
                                        <a href="single.html"><i class="fa fa-folder-open-o"></i>Electronics</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="category.html"><i class="fa fa-calendar"></i>26th December</a>
                                    </li>
                                </ul>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Explicabo, aliquam!</p>
                                <div class="product-ratings">
                                    <ul class="list-inline">
                                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }

        if ($filas == 2) {
            $fProductos = $arraySelectProductos['resultados'];

            foreach ($fProductos as $fProducto) {

                // VERIFICO SI EL STOCK DEL PRODUCTO ES 0
                $stock = $fProducto["stock"];

                if ($stock == 0) {

                } else {
                    ?>
                    <div class="col-sm-12 col-lg-12">
                        <!-- product card -->
                        <div class="product-item bg-light">
                            <div class="card">
                                <div class="thumb-content">
                                    <!-- <div class="price">$200</div> -->
                                    <a href="producto.php?id_producto=<?php echo $fProducto["id_producto"] ?>">
                                        <img class="card-img-top img-fluid" src="../website_externo/images/products/products-1.jpg"
                                            alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="single.html"><?php echo $fProducto["nombre"] ?></a></h4>
                                    <ul class="list-inline product-meta">
                                        <li class="list-inline-item">
                                            <a href="single.html"><i class="fa fa-folder-open-o"></i>Electronics</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="category.html"><i class="fa fa-calendar"></i>26th December</a>
                                        </li>
                                    </ul>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Explicabo, aliquam!</p>
                                    <div class="product-ratings">
                                        <ul class="list-inline">
                                            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
        }
    }
}