<?php
    require "conexao.php";

    echo "<br>Meu sistema está conectado!<br>";

    $sql = "CREATE TABLE IF NOT EXISTS teste (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100),
        idade INT
    )";

    $pdo->exec($sql);

    echo "<br>Tabela criada com sucesso!<br>";

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Lista de Atividades</title>
</head>
<body>
    <div class="container">
        <a href="projetos/idade.php" class="bt-voltar">Verificador de idade</a><br><br>
        <a href="projetos/notas.php" class="bt-voltar">Verificador de notas</a><br><br>
        <a href="projetos/login-basico.php" class="bt-voltar">Login básico</a><br><br>
        <a href="projetos/jogos.php" class="bt-voltar">Cadastro de jogos</a>
    </div>
</body>
</html>