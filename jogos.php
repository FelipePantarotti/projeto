<?php

    require "conexao.php";

    echo "<br>Cadastro de jogos";

    $sql = "CREATE TABLE IF NOT EXISTS jogos (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(100),
        genero VARCHAR(50),
        nota INT,
        ano_lancamento INT
    )";

    $pdo->exec($sql);

    $nome = "";
    $genero = "";
    $nota = "";
    $ano_lancamento = "";

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $nome = $_POST["nome"];
        $genero = $_POST["genero"];
        $nota = $_POST["nota"];
        $ano_lancamento = $_POST["ano_lancamento"];

        $sql_inserir = "INSERT INTO jogos (nome,genero,nota) VALUES ('$nome','$genero','$nota')" ;

        $pdo->exec($sql_inserir);

        echo "Jogo cadastrado!";
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de jogos</title>
</head>
<body>
<div class="container">
    <form method="POST">
        <input type="text" id="nome" name="nome" placeholder="Digite o nome do jogo"> <br><br>
        <input type="text" id="genero" name="genero" placeholder="Digite o gênero do jogo"> <br><br>
        <input type="number" id="nota" name="nota" placeholder="Digite a nota do jogo">
        <input type="number" id="ano_lancamento" name="ano_lancamento" placeholder="Digite o ano do lançamento">
        <button type="submit">Enviar</button>
            
        <a href="index.php" class="bt-voltar">Voltar ao inicio</a>
    </form>
</div>
</body>
</html>