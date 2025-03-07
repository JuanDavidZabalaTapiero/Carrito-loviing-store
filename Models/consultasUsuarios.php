<?php

// PREPARAR CONSULTA
require_once (__DIR__ . '/prepararConsulta.php');

class ConsultasUsuarios
{
    // PARA PREPARAR LA CONSULTA
    public $objPrepararConsulta;

    public function __construct()
    {
        $this->objPrepararConsulta = new PrepararConsulta();
    }

    // CREATE

    // READ
    public function selectUsuario($nombre)
    {
        $selectUsuario = "SELECT * FROM usuarios WHERE nombre = :nombre ";

        $bindValues = [
            ':nombre' => $nombre
        ];

        $resultSelectUsuario = $this->objPrepararConsulta->prepararConsulta($selectUsuario, $bindValues);

        $fUser = $resultSelectUsuario->fetch();

        return $fUser;
    }

    public function selectUsuarioId($id_user)
    {
        $selectUsuario = "SELECT * FROM usuarios WHERE id_user = :id_user";

        $bindValues = [
            ':id_user' => $id_user
        ];

        $resultSelectUsuario = $this->objPrepararConsulta->prepararConsulta($selectUsuario, $bindValues);

        $fUser = $resultSelectUsuario->fetch();

        return $fUser;
    }

    // UPDATE

    // DELETE
}