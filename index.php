<?php
    require "conexao.php";

    echo "<br>Meu sistema está conectado!";

    $sql = "CREATE TABLE IF NOT EXISTS teste (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100),
        idade INT
    )";

    $pdo->exec($sql);

    echo "<br>Tabela criada com sucesso!";

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista de Atividades</title>
</head>
<body>
    <div class="container">
        <a href="idade.php" class="bt-voltar">Verificador de idade</a><br><br>
        <a href="notas.php" class="bt-voltar">Verificador de notas</a><br><br>
        <a href="login-basico.php" class="bt-voltar">Login básico</a><br><br>
        <a href="jogos.php">Cadastro de jogos</a>
    </div>
</body>
</html>