<?php 
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        include_once('connection.php');

        $sql = "INSERT INTO usuarios (Nome, Email, Senha) VALUES ('$nome', '$email', '$senha')";

        if($mysqli->query($sql) === TRUE)
        {
            echo "<!DOCTYPE html>
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
                                <h1>Cadastro realizado com sucesso!</h1>
                                <div id='botao'>
                                    <button id='login'><a href='index.html'>Início</a></button>
                                </div>
                            </div>
                        </main>
                    </body>
                    </html>";
        }
        else
        {
            echo "Erro: " . $sql . "<br>" . $mysqli->error;
        }
    }
    else
    {
        header('Location: cadastro.html');
    }
?>