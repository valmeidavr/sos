<?php 

require 'db.php';

session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];

// Verifica se o email e senha são válidos
$stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
$stmt->execute([$email]);

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);


if ($usuario && $usuario['password'] == $senha) {
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit;
} else {
    echo "<script>alert('Usuário ou senha inválidos'); window.location.href = 'index.php';</script>";
}

?>