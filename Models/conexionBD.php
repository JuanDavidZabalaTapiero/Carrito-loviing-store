<?php

class ConexionBD
{
    public function getConexion()
    {
        try {
            $host = "";
            $dbName = "loviing store";
            $user = "root";
            $pass = "";

            $conexion = new PDO("mysql:host=$host;dbname=$dbName;", $user, $pass);

            return $conexion;
        } catch (PDOException $e) {
            echo 'Error al conectarse con la base de datos: ' . $e->getMessage();
        }
    }
}