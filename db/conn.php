<?php
    getDatabaseConnection();
    function getDatabaseConnection() {
        $con = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);
        if ($con->connect_error) {
            die("Falha na conexão: " . $con->connect_error);
        }
        return $con;
    }
?>