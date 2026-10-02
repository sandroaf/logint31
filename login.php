<?php
session_start();
if (!isset($_SESSION["user"])) {
    if (isset($_POST["fuser"]) && isset($_POST["fpass"])) {
        require_once("user.php");
        if ($users[$_POST["fuser"]] == md5($_POST["fpass"])) {
            //usuário e senha válidos
            $_SESSION["user"] = $_POST["fuser"]; //salva user logado
            $_SESSION["perfil"] = $users[$_SESSION["user"]."_perfil"];
            //redirecionar usuário logado para painel
            header("Location: painel.php");
        } else {
            $_SESSION["msg"] = "<span class='erro'>ERRO! Usuário ou senha incorretos</span>";
            header("Location: index.php");
            //usuário ou senha inválido
        }
    } else {
        $_SESSION["msg"] = "<span class='alerta'>Alerta! Necessário informar usuário e senha.</span>";
        header("Location: index.php");
    }
} else {
    header("Location: painel.php");
}
