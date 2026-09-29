<?php

$nome = "";
$genero = "";
$nota = "";
    require "conexao.php";

    echo "<br>Cadastro de jogos";

    $sql = "CREATE TABLE IF NOT EXISTS jogos (
        id INT PRIMARY KEY AUTO_INCREMENT
        nome VARCHAR(100),
        genero VARCHAR(50),
        nota INT
    )";

    $pdo->exec($sql);

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $nome = $_POST["nome"];
        $genero = $_POST["genero"];
        $nota = $_POST["nota"];
    
    }

    $sql_inserir = "INSERT INTO jogos (nome,genero,nota) VALUES ('$nome','$genero','$nota')" ;

    $pdo->exec($sql_inserir);

    echo "Jogo cadastrado!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos</title>
</head>
<body>
<div class="container">
        <form method="POST">
            <input type="text" id="nome" name="nome" placeholder="Digite o nome do jogo"> <br><br>
            <input type="text" id="genero" name="genero" placeholder="Digite o gênero do jogo"> <br><br>
            <input type="number" id="nota" name="nota" placeholder="Digite a nota do jogo">
            <button type="submit">Enviar</button>
            
            <a href="index.php" class="bt-voltar">Voltar ao inicio</a>
        </form>
    </div>
</body>
</html>