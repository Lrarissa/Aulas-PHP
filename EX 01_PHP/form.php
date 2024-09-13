<?php
    define("USER", "Larissa");
    define("SENHA", "123456");

    $user2 = $_POST["user"] ?? '';
    $senha2 = $_POST["senha"] ?? '';

    if (USER !== $user2) {
        header("Location: login_erro.html");
        exit();
    } else if (USER === $user2 && SENHA !== $senha2) {
        header('Location: login_erro.html');
        exit();
    } else {
        echo 'Bem vindo usuário!';
    }
?>