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
                <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css' integrity='sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==' crossorigin='anonymous' referrerpolicy='no-referrer' />
        </head>
        <body>
            <main>
                <div class='inicio'>
                    <h1>Bem vindo $email!</h1>
                    <div id='botao'>
                        <button id='login'><a href='logout.php'>Sair</a></button>
                    </div>
                    <a href='https://br.linkedin.com/in/davi-amorim-mendes-022a01307' id='link' target='_blank'><p>(<i class='fa-solid fa-user'></i>) davi.amorim.mendes.082@gmail.com</p></a>
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