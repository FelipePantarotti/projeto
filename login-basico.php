<?php
$usuario = "";
$senha = "";
$mensagem = "";
$erro = "";

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario == "aluno2026" && $senha == "senha2026"){
        $mensagem = "Login realizado com sucesso!";
    }
    else {
        $erro = "Usuário ou senha incorretos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form method="POST">
        <input type="text" id="name" name="usuario" placeholder="Digite seu usuário"> <br><br>
        <input type="number" id="idade" name="senha" placeholder="Digite sua senha"> <br><br>
        <button type="submit">Enviar</button>
</body>
</html>
