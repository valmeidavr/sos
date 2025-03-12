<?php 
session_start();


if(!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}

$usuario = $_SESSION['usuario'];


echo "Bem vindo, {$usuario['name']}";
echo "<a href='logout.php'>Sair</a>";

?>