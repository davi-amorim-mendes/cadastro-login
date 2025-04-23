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

$sql = "DELETE FROM usuarios WHERE ID = $id";

$result = $mysqli->query($sql);

header('Location: inicio.php');
?>