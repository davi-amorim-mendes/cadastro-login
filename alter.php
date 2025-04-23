<?php 
session_start();
include_once('connection.php');

if(isset($_SESSION['email']) == false && isset($_SESSION['senha']) == false)
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.html');
}

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "UPDATE usuarios SET Nome = '$nome', Email = '$email', Senha = '$senha' WHERE ID = $id";

if($mysqli->query($sql) === TRUE)
{
    echo "<!DOCTYPE html>
            <html lang='pt-br'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Cadastro e Login</title>
                <link rel='stylesheet' href='styles/style.css'>
                <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css' integrity='sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==' crossorigin='anonymous' referrerpolicy='no-referrer' />
            </head>
            <body>
                <main>
                    <div class='inicio'>
                        <h1>Alterações realizadas com sucesso!</h1>
                        <div id='botao'>
                            <button id='login'><a href='inicio.php'>Voltar</a></button>
                        </div>
                        <a href='https://br.linkedin.com/in/davi-amorim-mendes-022a01307' id='link' target='_blank'><p>(<i class='fa-solid fa-user'></i>) davi.amorim.mendes.082@gmail.com</p></a>
                    </div>
                </main>
            </body>
            </html>";
}
else
{
    echo "Erro: " . $sql . "<br>" . $mysqli->error;
}
?>