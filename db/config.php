<?php
    define('URL_ROOT', 'localhost/taskTi');
    define('SERVER_NAME', 'localhost');
    define('USER_NAME', 'root');
    define('PASSWORD', 'root');
    define('DB_NAME', 'ti');

    include 'conn.php';

    function executeQuery($query) {
        $con = getDatabaseConnection();
    
        $result = mysqli_query($con, $query);
    
        if ($result) {
            return $result;
        } else {
            echo "Erro na execução da consulta: " . mysqli_error($con);
        }
        mysqli_close($con);
    }
?>