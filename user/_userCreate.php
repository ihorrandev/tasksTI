<?php
    include '../db/config.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

    
        $sql = "INSERT INTO tb_usuarios(nome, email, senha) VALUES('$nome', '$email', '$senha')";
        $response = executeQuery($sql);
        
        header("Location: userCreate.php");
        exit();
        header('Content-Type: application/json');
        return json_encode($response);

    } else {
        
        $response = array(
            'status' => 'error',
            'message' => 'Método não suportado'
        );

        header('Content-Type: application/json');
        echo json_encode($response);
    }
?>