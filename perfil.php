<?php
session_start();
if (!isset($_SESSION["user"])) {
    $_SESSION["msg"] = "<span class='erro'>ERRO! Área restrica exige login</span>";
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil <?= $_SESSION["user"] ?></title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <main id="painel">
        <header>
            <a href="perfil.php"><?= $_SESSION["user"] ?></a> | <a href="sair.php">SAIR</a>
        </header>
        <h1>Perfil</h1>
        <br>

        <p>Perfil Usuário: <?= $_SESSION["user"] ?>.
        <p><?= $_SESSION["perfil"] ?></p>
    </p>
    </main>
</body>

</html>