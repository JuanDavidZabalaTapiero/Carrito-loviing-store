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
        <link href="../website_externo/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../website_externo/plugins/slick/slick.css" rel="stylesheet">
        <link href="../website_externo/plugins/slick/slick-theme.css" rel="stylesheet">
        <link href="../website_externo/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">

        <link href="../website_externo/css/style.css" rel="stylesheet">

        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <?php
    }

    // HEADER
    public function showHeader()
    {
        ?>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light navigation">
                            <a class="navbar-brand" href="index.html">
                                <img src="../website_externo/images/logo.png" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto main-nav ">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.html">Home</a>
                                    </li>

                                    <li class="nav-item dropdown dropdown-slide @@dashboard">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#!">Dashboard<span><i
                                                    class="fa fa-angle-down"></i></span>
                                        </a>

                                        <!-- Dropdown list -->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item @@dashboardPage" href="dashboard.html">Dashboard</a>
                                            </li>
                                            <li><a class="dropdown-item @@dashboardMyAds" href="dashboard-my-ads.html">Dashboard
                                                    My Ads</a></li>
                                            <li><a class="dropdown-item @@dashboardFavouriteAds"
                                                    href="dashboard-favourite-ads.html">Dashboard Favourite Ads</a></li>
                                            <li><a class="dropdown-item @@dashboardArchivedAds"
                                                    href="dashboard-archived-ads.html">Dashboard Archived Ads</a></li>
                                            <li><a class="dropdown-item @@dashboardPendingAds"
                                                    href="dashboard-pending-ads.html">Dashboard Pending Ads</a></li>

                                            <li class="dropdown dropdown-submenu dropright">
                                                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Sub Menu</a>

                                                <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                                                    <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                                    <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown dropdown-slide @@pages">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Pages <span><i class="fa fa-angle-down"></i></span>
                                        </a>
                                        <!-- Dropdown list -->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item @@about" href="about-us.html">About Us</a></li>
                                            <li><a class="dropdown-item @@contact" href="contact-us.html">Contact Us</a>
                                            </li>
                                            <li><a class="dropdown-item @@profile" href="user-profile.html">User Profile</a>
                                            </li>
                                            <li><a class="dropdown-item @@404" href="404.html">404 Page</a></li>
                                            <li><a class="dropdown-item @@package" href="package.html">Package</a></li>
                                            <li><a class="dropdown-item @@singlePage" href="single.html">Single Page</a>
                                            </li>
                                            <li><a class="dropdown-item @@store" href="store.html">Store Single</a></li>
                                            <li><a class="dropdown-item @@blog" href="blog.html">Blog</a></li>
                                            <li><a class="dropdown-item @@singleBlog" href="single-blog.html">Blog
                                                    Details</a></li>
                                            <li><a class="dropdown-item @@terms" href="terms-condition.html">Terms &amp;
                                                    Conditions</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown dropdown-slide @@listing">
                                        <a class="nav-link dropdown-toggle" href="#!" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Listing <span><i class="fa fa-angle-down"></i></span>
                                        </a>
                                        <!-- Dropdown list -->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item @@category" href="category.html">Ad-Gird View</a>
                                            </li>
                                            <li><a class="dropdown-item @@listView" href="ad-list-view.html">Ad-List
                                                    View</a></li>

                                            <li class="dropdown dropdown-submenu dropleft">
                                                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0201"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Sub Menu</a>

                                                <ul class="dropdown-menu" aria-labelledby="dropdown0201">
                                                    <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                                    <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="carrito.php">Carrito</a>
                                    </li>
                                </ul>

                                <ul class="navbar-nav ml-auto mt-10">
                                    <li class="nav-item">
                                        <a class="nav-link login-button" href="login.html">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white add-button" href="ad-listing.html"><i
                                                class="fa fa-plus-circle"></i> Add Listing</a>
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
        <p><?php echo $fProducto["nombre"] ?></p>

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

            <button type="submit" class="btn_comprar">Comprar</button>
        </form>

        <form action="" method="post">
            <input type="hidden" name="form" value="carrito">

            <input type="hidden" name="cantidad" id="cantidad_carrito" value="1">

            <button type="submit" class="btn_carrito">Agregar al carrito</button>
        </form>

        <script>
            let cantidad_select = document.getElementById("cantidad_select");

            let cantidad_carrito = document.getElementById("cantidad_carrito");

            let btn_carrito = document.querySelector(".btn_carrito");

            btn_carrito.addEventListener('click', function () {
                cantidad_carrito.value = cantidad_select.value;
            })

        </script>
        <?php
    }

    // CARRITO.PHP
    // MAIN
    public function showCarrito($cod_cliente)
    {
        // VERIFICO QUE EL CARRITO EXISTA
        $fCarrito = $this->objConsultasCarrito->selectCarrito($cod_cliente);

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
                echo 'No tienes productos en tu carrito';
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

                    <button type="submit">Eliminar del carrito</button>
                </form>

                <form action="" method="post">
                    <input type="hidden" name="form" value="comprar_carrito">

                    <button type="submit">Comprar carrito</button>
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

                        <button type="submit">Eliminar del carrito</button>
                    </form>
                    <?php
                }
                ?>
                <form action="" method="post">
                    <input type="hidden" name="form" value="comprar_carrito">
                    <button type="submit">Comprar carrito</button>
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