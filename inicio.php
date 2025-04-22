<?php 
session_start();

if(isset($_SESSION['email']) == true && isset($_SESSION['senha']) == true)
{
    $email = $_SESSION['email'];

echo"<!DOCTYPE html>
        <html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Cadastro e Login</title>
            <link rel='stylesheet' href='styles/style.css'>
        </head>
        <body>
            <main>
                <div class='inicio'>
                    <h1>Bem vindo $email!</h1>
                    <div id='botao'>
                        <button id='login'><a href='logout.php'>Sair</a></button>
                    </div>
                </div>
            </main>
        </body>
        </html>";
}
else
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.html');
}


?>