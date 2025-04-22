<?php 
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    include_once('connection.php');

    $sql = "SELECT * FROM usuarios WHERE Email='$email' and Senha='$senha'";

    $result = $mysqli->query($sql);

    print_r($result);

    if(mysqli_num_rows($result) < 1)
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        echo "nao existe";
    }
    else
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: inicio.php');
    }
?>