<?php

// CONSULTAS DE USUARIOS
require_once (__DIR__ . '/consultasUsuarios.php');

class IniciarSesion
{
    // PARA CONSULTAS DE USUARIOS
    public $objConsultasUsuarios;

    public function __construct()
    {
        $this->objConsultasUsuarios = new ConsultasUsuarios();
    }

    public function iniciarSesion($nombreUser)
    {
        $fUser = $this->objConsultasUsuarios->selectUsuario($nombreUser);

        if (!$fUser) {
            echo "No existe el user";
        } else {
            session_start();

            $_SESSION["id_user"] = $fUser["id_user"];

            header('location: ../Cliente/home.php');
        }
    }
}