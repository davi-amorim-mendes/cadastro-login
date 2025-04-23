<?php 
session_start();
include_once('connection.php');

if(isset($_SESSION['email']) == false && isset($_SESSION['senha']) == false)
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.html');
}

$id = $_GET['ID'];


$sql = "SELECT * FROM usuarios WHERE ID = $id";

$result = $mysqli->query($sql);

$user_data = mysqli_fetch_assoc($result);

$nome = $user_data['Nome'];
$email = $user_data['Email'];
$senha = $user_data['Senha'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro e Login</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main>
        <div class="inicio">
            <h1>Edite suas informações</h1>
                <form action="alter.php" method="post">
                    <div id="formulario">
                        <label for="nome">Nome: </label>
                    </div>
                    <input type="text" value="<?=$nome?>" name="nome" id="nome"  required>
                    <div id="formulario">
                        <label for="email">Email: </label>
                    </div>
                    <input type="text" value="<?=$email?>" name="email" id="email" required>
                    <div id="formulario">
                        <label for="senha">Senha:</label>
                    </div>
                    <input type="password" value="<?=$senha?>" name="senha" id="senha" required>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <div id="formulario">
                        <button type="submit" id="login">Entrar</a></button>
                    </div>
                </form>
                <a href="https://br.linkedin.com/in/davi-amorim-mendes-022a01307" id="link" target="_blank"><p>(<i class="fa-solid fa-user"></i>) davi.amorim.mendes.082@gmail.com</p></a>
        </div>
    </main>
</body>
</html>