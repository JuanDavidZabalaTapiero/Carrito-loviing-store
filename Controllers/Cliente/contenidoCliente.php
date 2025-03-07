<?php

// CONSULTAS PRODUCTOS
require_once (__DIR__ . '/../../Models/consultasProductos.php');

// CONSULTAS CARRITO
require_once (__DIR__ . '/../../Models/consultasCarrito.php');

// CONSULTAS ITEMS_CARRITO
require_once (__DIR__ . '/../../Models/consultasItemsCarrito.php');

class ContenidoCliente
{
    // PARA CONSULTAR PRODUCTOS
    public $objConsultasProductos;

    // PARA CONSULTAR CARRITO
    public $objConsultasCarrito;

    // PARA CONSULTAR ITEMS_CARRITO
    public $objConsultasItemsCarrito;

    public function __construct()
    {
        $this->objConsultasProductos = new ConsultasProductos();

        $this->objConsultasCarrito = new ConsultasCarrito();

        $this->objConsultasItemsCarrito = new ConsultasItemsCarrito();
    }

    // CONEXIONES <LINK>
    public function showLinks()
    {
        ?>
        <!-- favicon -->
        <link href="../website_externo/images/favicon.png" rel="shortcut icon">

        <!-- Essential stylesheets
         =====================================-->
        <link href="../website_externo/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="../website_externo/plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
        <link href="../website_externo/plugins/slick/slick.css" rel="stylesheet">
        <link href="../website_externo/plugins/slick/slick-theme.css" rel="stylesheet">
        <link href="../website_externo/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

        <!-- FONTAWESOME CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="../website_externo/css/style.css" rel="stylesheet">

        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <?php
    }

    // HEADER
    public function showHeader($current_page_name)
    {
        ?>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light navigation">
                            <a class="navbar-brand" href="home.php">
                                <h2>Loviing Store</h2>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto main-nav ">
                                    <li class="nav-item <?php echo ($current_page_name == "home.php") ? 'active' : ''; ?>">
                                        <a class="nav-link" href="home.php">Home</a>
                                    </li>

                                    <li class="nav-item dropdown dropdown-slide @@pages">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Extra <span><i class="fa fa-angle-down"></i></span>
                                        </a>
                                        <!-- Dropdown list -->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item @@about" href="about-us.html">Sobre nosotros</a></li>
                                            <li><a class="dropdown-item @@contact" href="contact-us.html">Contácto</a>
                                            </li>
                                            <li><a class="dropdown-item @@terms" href="terms-condition.html">Términos y
                                                    condiciones</a></li>
                                        </ul>
                                    </li>

                                    <!-- PERFIL DEL CLIENTE -->
                                    <li class="nav-item dropdown dropdown-slide @@listing">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Perfil <span><i class="fa fa-angle-down"></i></span>
                                        </a>

                                        <!-- Dropdown list -->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="../../Controllers/cerrarSesionController.php"><i
                                                        class="fa-solid fa-right-from-bracket"></i> Cerrar sesión</a></li>
                                        </ul>
                                    </li>
                                </ul>

                                <ul class="navbar-nav ml-auto mt-10">
                                    <li class="nav-item <?php echo ($current_page_name == "carrito.php") ? 'active' : ''; ?>">
                                        <a class="nav-link" href="carrito.php">
                                            <i class="fa-solid fa-cart-shopping fa-xl"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <?php
    }

    // PRODUCTO.PHP
    // MAIN
    public function showProducto($id_producto)
    {
        // CONSULTO LA INFO DEL PRODUCTO
        $fProducto = $this->objConsultasProductos->selectProducto($id_producto);

        ?>
        <section class="section">
            <div class="container">
                <p><?php echo $fProducto["nombre"] ?></p>

                <p>En stock: <?php echo $fProducto["stock"] ?></p>

                <form action="" method="post">
                    <input type="hidden" name="form" value="comprar">

                    <?php
                    // CONSULTO EL STOCK DEL PRODUCTO PARA ELEGIR LA CANTIDAD
                    $stock = $fProducto["stock"];
                    ?>

                    <select name="cantidad" id="cantidad_select">
                        <?php

                        for ($i = 1; $i < $stock + 1; $i++) {
                            ?>
                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php
                        }

                        ?>
                    </select>

                    <button type="submit" class="btn_comprar d-block btn btn-primary w-100">Comprar</button>
                </form>

                <form action="" method="post">
                    <input type="hidden" name="form" value="carrito">

                    <input type="hidden" name="cantidad" id="cantidad_carrito" value="1">

                    <button type="submit" class="btn_carrito btn btn-primary w-100">Agregar al carrito</button>
                </form>

                <script>
                    let cantidad_select = document.getElementById("cantidad_select");

                    let cantidad_carrito = document.getElementById("cantidad_carrito");

                    let btn_carrito = document.querySelector(".btn_carrito");

                    btn_carrito.addEventListener('click', function () {
                        cantidad_carrito.value = cantidad_select.value;
                    })

                </script>
            </div>
        </section>
        <?php
    }

    // CARRITO.PHP
    // MAIN
    public function showCarrito($cod_cliente)
    {
        // VERIFICO QUE EL CARRITO EXISTA
        $fCarrito = $this->objConsultasCarrito->selectCarrito($cod_cliente);

        ?>
        <section class="section">
            <div class="container">
                <?php

                if (!$fCarrito) {
                    ?>
                    <p>No existe el carrito</p>
                    <?php
                } else {
                    $id_carrito = $fCarrito["id_carrito"];

                    // VERIFICO QUE EL CARRITO TENGA ITEMS
                    $arraySelectItems = $this->objConsultasItemsCarrito->selectItemsCarrito($id_carrito);

                    $filas = $arraySelectItems['filas'];

                    if ($filas == 0) {
                        ?>
                        <p>No tienes productos en tu carrito</p>
                        <?php
                    }

                    if ($filas == 1) {
                        $fItem = $arraySelectItems['resultado'];

                        ?>
                        <p><?php echo $fItem["nombre"] ?></p>

                        <p>Cantidad:</p>
                        <form action="" method="post" id="formCantidadCarrito">
                            <!-- HIDDEN -->
                            <input type="hidden" name="form" value="cantidad_carrito">

                            <!-- ID PRODUCTO -->
                            <input type="hidden" name="id_producto" value="<?php echo $fItem["cod_producto"] ?>">

                            <!-- CANTIDAD -->
                            <input type="hidden" name="cantidad" id="cantidad_hidden" value="<?php echo $fItem["cantidad"] ?>">

                            <select name="cantidadCarrito" id="selectCantidad">
                                <option value="<?php echo $fItem["cantidad"] ?>"><?php echo $fItem["cantidad"] ?></option>

                                <!-- VERIFICO EL STOCK DEL PRODUCTO -->
                                <?php
                                $fProducto = $this->objConsultasProductos->selectProducto($fItem["cod_producto"]);

                                $stock = $fProducto["stock"];

                                // MUESTRO LAS DEMÁS CANTIDADES POSIBLES
                                for ($i = 1; $i < $stock + 1; $i++) {
                                    ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </form>

                        <script>
                            $(document).ready(function () {
                                $('#selectCantidad').on('change', function () {
                                    let cantidad_hidden = document.getElementById("cantidad_hidden");

                                    let selectCantidad = document.getElementById("selectCantidad");

                                    cantidad_hidden.value = selectCantidad.value;

                                    $('#formCantidadCarrito').submit();

                                });
                            });
                        </script>

                        <!-- PARA ELIMINAR EL ITEM DEL CARRITO -->
                        <form action="" method="post">
                            <!-- HIDDEN -->
                            <input type="hidden" name="form" value="delete_item">

                            <!-- ID DEL PRODUCTO -->
                            <input type="hidden" name="id_producto" value="<?php echo $fItem["cod_producto"] ?>">

                            <button type="submit" class="btn btn-danger w-100">Eliminar del carrito</button>
                        </form>

                        <form action="" method="post">
                            <input type="hidden" name="form" value="comprar_carrito">

                            <button type="submit" class="btn btn-primary w-100">Comprar carrito</button>
                        </form>
                        <?php
                    }

                    if ($filas == 2) {
                        $fItems = $arraySelectItems['resultados'];

                        foreach ($fItems as $index => $fItem) {
                            // Generar identificadores únicos usando el índice
                            $formId = "formCantidadCarrito_" . $index;
                            $selectId = "selectCantidad_" . $index;
                            $hiddenId = "cantidad_hidden_" . $index;
                            ?>
                            <p><?php echo $fItem["nombre"] ?></p>

                            <p>Cantidad:</p>
                            <form action="" method="post" id="<?php echo $formId; ?>">
                                <!-- HIDDEN -->
                                <input type="hidden" name="form" value="cantidad_carrito">

                                <!-- ID PRODUCTO -->
                                <input type="hidden" name="id_producto" value="<?php echo $fItem["cod_producto"] ?>">

                                <!-- CANTIDAD -->
                                <input type="hidden" name="cantidad" id="<?php echo $hiddenId; ?>" value="<?php echo $fItem["cantidad"] ?>">

                                <select name="cantidadCarrito" id="<?php echo $selectId; ?>">
                                    <option value="<?php echo $fItem["cantidad"] ?>"><?php echo $fItem["cantidad"] ?></option>

                                    <!-- VERIFICO EL STOCK DEL PRODUCTO -->
                                    <?php
                                    $fProducto = $this->objConsultasProductos->selectProducto($fItem["cod_producto"]);
                                    $stock = $fProducto["stock"];

                                    // MUESTRO LAS DEMÁS CANTIDADES POSIBLES
                                    for ($i = 1; $i < $stock + 1; $i++) {
                                        ?>
                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </form>

                            <!-- PARA ELIMINAR EL ITEM DEL CARRITO -->
                            <form action="" method="post">
                                <!-- HIDDEN -->
                                <input type="hidden" name="form" value="delete_item">

                                <!-- ID DEL PRODUCTO -->
                                <input type="hidden" name="id_producto" value="<?php echo $fItem["cod_producto"] ?>">

                                <button type="submit" class="btn btn-danger w-100">Eliminar del carrito</button>
                            </form>
                            <?php
                        }
                        ?>
                        <form action="" method="post">
                            <input type="hidden" name="form" value="comprar_carrito">
                            <button type="submit" class="btn btn-primary w-100">Comprar carrito</button>
                        </form>

                        <script>
                            $(document).ready(function () {
                                // Añadir un evento change para cada select dinámicamente
                                $('select[id^="selectCantidad_"]').on('change', function () {
                                    // Obtener el índice del select actual
                                    var index = $(this).attr('id').split('_')[1];

                                    // Obtener los elementos específicos del formulario usando el índice
                                    var formId = "#formCantidadCarrito_" + index;
                                    var hiddenId = "#cantidad_hidden_" + index;

                                    // Actualizar el valor del input hidden
                                    $(hiddenId).val($(this).val());

                                    // Enviar el formulario
                                    $(formId).submit();
                                });
                            });
                        </script>
                        <?php
                    }

                }

                ?>
            </div>
        </section>
        <?php
    }

    // HOME.PHP
    // MAIN
    public function showHomeProducts()
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
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><a
                                        href="producto.php?id_producto=<?php echo $fProducto["id_producto"] ?>"><?php echo $fProducto["nombre"] ?></a>
                                </h4>
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
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="producto.php?id_producto=<?php echo $fProducto["id_producto"] ?>"><?php echo $fProducto["nombre"] ?></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
        }
    }

    // CONEXION <SCRIPT>
    public function showScripts()
    {
        ?>
        <!-- Essential Scripts
         =====================================-->
        <script src="../website_externo/plugins/jquery/jquery.min.js"></script>
        <script src="../website_externo/plugins/bootstrap/popper.min.js"></script>
        <script src="../website_externo/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="../website_externo/plugins/bootstrap/bootstrap-slider.js"></script>
        <script src="../website_externo/plugins/tether/js/tether.min.js"></script>
        <script src="../website_externo/plugins/raty/jquery.raty-fa.js"></script>
        <script src="../website_externo/plugins/slick/slick.min.js"></script>
        <script src="../website_externo/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>

        <!-- google map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
        <script src="../website_externo/plugins/google-map/map.js" defer></script>

        <script src="../website_externo/js/script.js"></script>
        <?php
    }
}