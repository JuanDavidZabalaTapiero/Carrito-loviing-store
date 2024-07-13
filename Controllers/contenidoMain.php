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

    // HEADER
    public function showMainHeader($links)
    {
        ?>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light navigation">
                            <a class="navbar-brand" href="<?php echo $links['index.php'] ?>">
                                <h2>Loviing Store</h2>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto main-nav ">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?php echo $links['index.php'] ?>">Inicio</a>
                                    </li>

                                    <li class="nav-item dropdown dropdown-slide @@pages">
                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Extra<span><i class="fa fa-angle-down"></i></span>
                                        </a>
                                        <!-- Dropdown list -->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item @@about" href="#">Sobre nosotros</a>
                                            </li>
                                            <li><a class="dropdown-item @@contact" href="#">Contacto</a>
                                            </li>
                                            <li><a class="dropdown-item @@terms" href="#">Términos y
                                                    condiciones</a></li>
                                        </ul>
                                    </li>

                                </ul>
                                <ul class="navbar-nav ml-auto mt-10">
                                    <li class="nav-item">
                                        <a class="nav-link login-button"
                                            href="<?php echo $links['iniciarSesion.php'] ?>">Login</a>
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

    // PRODUCTOS
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
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><a href="single.html"><?php echo $fProducto["nombre"] ?></a></h4>
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
                                    <h4 class="card-title"><a
                                            href="Views/website_externo/producto.php?id_producto=<?php echo $fProducto["id_producto"] ?>"><?php echo $fProducto["nombre"] ?></a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
        }
    }

    // FOOTER
    public function showMainFooter()
    {
        ?>
        <footer class="footer-bottom">
            <!-- Container Start -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
                        <!-- Copyright -->
                        <div class="copyright">
                            <p>Copyright &copy;
                                <script>
                                    var CurrentYear = new Date().getFullYear()
                                    document.write(CurrentYear)
                                </script> Loviing Store
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Social Icons -->
                        <ul class="social-media-icons text-center text-lg-right">
                            <li><a class="fa-brands fa-facebook-f" href="https://www.facebook.com/themefisher"></a></li>
                            <li><a class="fa-brands fa-x-twitter" href="https://www.twitter.com/themefisher"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Container End -->
            <!-- To Top -->
            <div class="scroll-top-to">
                <i class="fa fa-angle-up"></i>
            </div>
        </footer>
        <?php
    }
}