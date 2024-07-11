<?php

// CONTENIDO CLIENTE
require_once (__DIR__ . '/../../Controllers/Cliente/contenidoCliente.php');
$objContenidoCliente = new ContenidoCliente();

// INICIAR SESIÓN CONTROLLER
require_once (__DIR__ . '/../../Controllers/iniciarSesionController.php');
$objIniciarSesionController = new IniciarSesionController();

// VERIFICAR SI EL MÉTODO POST ESTÁ ESTABLECIDO
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $form = $_POST["form"];

    if ($form == "login") {
        $nombreUser = $_POST["nombreLogin"];

        $objIniciarSesionController->iniciarSesion($nombreUser);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- LINKS -->
    <?php
    $objContenidoCliente->showLinks();
    ?>
</head>

<body>
    <main>
        <section class="section">
            <div class="container">
                <form action="" method="post">
                    <input type="hidden" name="form" value="login">

                    <input type="text" name="nombreLogin" id="" class="d-block w-100">

                    <button type="submit" class="d-block w-100">Login</button>
                </form>
            </div>
        </section>
    </main>

    <!-- SCRIPTS -->
    <?php
    $objContenidoCliente->showScripts();
    ?>
</body>

</html>