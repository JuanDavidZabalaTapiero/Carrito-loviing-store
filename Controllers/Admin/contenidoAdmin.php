<?php

// CONSULTAS DE USUARIOS
require_once (__DIR__ . '/../../Models/consultasUsuarios.php');

require_once (__DIR__ . '/../../Models/consultasProductos.php');

class ContenidoAdmin
{
    // PARA CONSULTAS DE USUARIOS
    public $objConsultasUsuarios;

    // PARA CONSULTAS DE PRODUCTOS
    public $objConsultasProductos;

    public function __construct()
    {
        $this->objConsultasUsuarios = new ConsultasUsuarios();

        $this->objConsultasProductos = new ConsultasProductos();
    }

    // LINKS
    public function showLinks()
    {
        ?>
        <!-- Favicons -->
        <link href="Dashboard/assets/img/favicon.png" rel="icon">
        <link href="Dashboard/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="Dashboard/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="Dashboard/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="Dashboard/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="Dashboard/assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="Dashboard/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="Dashboard/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="Dashboard/assets/vendor/simple-datatables/style.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="Dashboard/assets/css/style.css" rel="stylesheet">
        <?php
    }

    // HEADER
    public function showHeaderAdmin($id_user)
    {
        // INFO DEL ADMIN
        $fUser = $this->objConsultasUsuarios->selectUsuarioId($id_user);

        ?>

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <a href="home.php" class="logo d-flex align-items-center">
                    <img src="Dashboard/assets/img/logo_ls.png" alt="">
                    <span class="d-none d-lg-block">Loviing Store</span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- End Logo -->

            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li><!-- End Search Icon-->

                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <img src="../../Uploads/Usuarios/<?php echo $fUser["foto_user"] ?>" alt="Profile"
                                class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $fUser["nombre"] ?></span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6><?php echo $fUser["nombre"] ?></h6>
                                <span><?php echo $fUser["rol"] ?></span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="bi bi-person"></i>
                                    <span>Mi perfil</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center"
                                    href="../../Controllers/cerrarSesionController.php">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Salir</span>
                                </a>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->

                </ul>
            </nav><!-- End Icons Navigation -->

        </header><!-- End Header -->
        <?php
    }

    // SIDEBAR
    public function showSidebarAdmin()
    {
        ?>
        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link " href="home.php">
                        <i class="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-basket2-fill"></i><span>Productos</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="products-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="tblProductos.php">
                                <i class="bi bi-circle"></i><span>Ver Tabla</span>
                            </a>
                        </li>

                        <li>
                            <a href="registrarProducto.php">
                                <i class="bi bi-circle"></i><span>Registrar</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Components Nav -->

            </ul>
        </aside><!-- End Sidebar-->
        <?php
    }

    // tblProductos.php
    // MAIN
    public function showTblProductos()
    {
        $arraySelectProductos = $this->objConsultasProductos->selectProductos();

        $filas = $arraySelectProductos['filas'];

        if ($filas == 0) {
            ?>
            <tr>
                <td colspan="3">No hay productos registrados</td>
            </tr>
            <?php
        }

        if ($filas == 1) {
            $fProducto = $arraySelectProductos['resultado'];

            ?>
            <tr>
                <td><?php echo $fProducto['id_producto'] ?></td>
                <td><?php echo $fProducto['nombre'] ?></td>
                <td><?php echo $fProducto['stock'] ?></td>
                <td><a class="btn btn-primary" href="">Editar</a></td>
                <td><a class="btn btn-danger" href="">Eliminar</a></td>
            </tr>
            <?php
        }

        if ($filas == 2) {
            $fProductos = $arraySelectProductos['resultados'];

            foreach ($fProductos as $fProducto) {
                ?>
                <tr>
                    <td><?php echo $fProducto['id_producto'] ?></td>
                    <td><?php echo $fProducto['nombre'] ?></td>
                    <td><?php echo $fProducto['stock'] ?></td>
                    <td><a class="btn btn-primary" href="">Editar</a></td>
                    <td><a class="btn btn-danger" href="">Eliminar</a></td>
                </tr>
                <?php
            }
        }
    }

    // FOOTER
    public function showFooterAdmin()
    {
        ?>
        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="copyright">
                &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Loviing Store
            </div>
        </footer><!-- End Footer -->
        <?php
    }

    // SCRIPTS
    public function showScriptsAdmin()
    {
        ?>
        <!-- Vendor JS Files -->
        <script src="Dashboard/assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="Dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="Dashboard/assets/vendor/chart.js/chart.umd.js"></script>
        <script src="Dashboard/assets/vendor/echarts/echarts.min.js"></script>
        <script src="Dashboard/assets/vendor/quill/quill.js"></script>
        <script src="Dashboard/assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="Dashboard/assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="Dashboard/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="Dashboard/assets/js/main.js"></script>
        <?php
    }
}