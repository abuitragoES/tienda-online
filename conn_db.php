<?php

    // Define las variables de conexión
    $host = "PMYSQL107.dns-servicio.com:3306";
    $username = "abuitrago";
    $password = "hYk8&kUuR3s5D6fhqSg%";
    $database = "10231514_abuitrago";

    // Crea un objeto MySQLi
    $mysqli = new mysqli($host, $username, $password, $database);
    $mysqli->set_charset("utf8");

    // Verifica la conexión
    /* if ($mysqli->connect_error) {
        die("Error de conexión: " . $mysqli->connect_error);
    } */

?>