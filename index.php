<?php
   session_start(); 
   if (!isset($_SESSION["msg"])) {
        $_SESSION["msg"] = "";    
   }
   if (isset($_SESSION["user"])) {
        header("Location: painel.php");
   }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - session</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <header>
            <?= $_SESSION["msg"] ?>
        </header>
        <h1>Login</h1> 
        <br>
        <form action="login.php" method="post">
            <label for="fuser">Usuário: </label>
            <input type="text" name="fuser" required><br>
            <label for="fpass">Senha: </label>
            <input type="password" name="fpass" required><br>
            <br>
            <button type="submit">Entrar</button>
            <br>
        </form>
    </main>
</body>
</html>