<?php

// CONSULTAS USUARIOS
require_once (__DIR__ . '/../../Models/iniciarSesion.php');

class IniciarSesionController
{
    // PARA CONSULTAS DE USUARIOS
    public $objIniciarSesion;

    public function __construct()
    {
        $this->objIniciarSesion = new IniciarSesion();
    }

    public function iniciarSesion($nombreUser)
    {
        $this->objIniciarSesion->iniciarSesion($nombreUser);
    }
}