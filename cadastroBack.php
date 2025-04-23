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
                        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css' integrity='sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==' crossorigin='anonymous' referrerpolicy='no-referrer' />
                    </head>
                    <body>
                        <main>
                            <div class='inicio'>
                                <h1>Cadastro realizado com sucesso!</h1>
                                <div id='botao'>
                                    <button id='login'><a href='index.html'>Início</a></button>
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
    }
    else
    {
        header('Location: cadastro.html');
    }
?>