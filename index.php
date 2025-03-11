<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container-login">
    
        <form action="login.php" method="POST">
            <h3>Tela de Autenticação</h3>
            <label for="login">Login:</label>
            <input type="text" name="email" id="email" required>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>