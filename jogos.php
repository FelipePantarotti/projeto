<?php

    require "conexao.php";

    echo "<br>Cadastro de jogos";

    $sql = "CREATE TABLE IF NOT EXISTS jogos (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(100),
        genero VARCHAR(50),
        nota INT
    )";

    $pdo->exec($sql);

    $nome = "";
    $genero = "";
    $nota = "";
    $ano_lancamento = "";
    
    $sql_alter = 
    "ALTER TABLE jogos 
    ADD ano_lancamento INT;
    ";

    $pdo->exec($sql_alter);

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $nome = $_POST["nome"];
        $genero = $_POST["genero"];
        $nota = $_POST["nota"];
        $ano_lancamento = $_POST["ano_lancamento"];

        $sql_inserir = "INSERT INTO jogos (nome,genero,nota) VALUES ('$nome','$genero','$nota')";

        $pdo->exec($sql_inserir);

        echo "Jogo cadastrado!";

    }

$buscar = "SELECT * FROM jogos";

// exec() = executa algo quando você NÃO precisa receber registros de volta.
// query() = executa uam consulta quando você QUER receber dados de volta.
$stmt = $pdo->query($buscar);

$jogos = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
        <input type="number" id="nota" name="nota" placeholder="Digite a nota do jogo"> <br><br>
        <input type="number" id="ano_lancamento" name="ano_lancamento" placeholder="Digite o ano do lançamento">
        <button type="submit">Enviar</button>
            
        <a href="index.php" class="bt-voltar">Voltar ao inicio</a>
    </form>

    <h2>JOGOS CADASTRADOS</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Gênero</th>
            <th>Nota</th>
            <th>Ano de Lançamento</th>
        </tr>

        <!-- foreach() -> Para cada item nessa lista, faça alguma coisa com x variável -->
        <?php foreach($jogos as $jogo) { ?>
            <tr>
                <td><?= $jogo["id"] ?></td>
                <td><?= $jogo["nome"] ?></td>
                <td><?= $jogo["genero"] ?></td>
                <td><?= $jogo["nota"] ?></td>
                <td><?= $jogo["ano_lancamento"] ?></td>
            </tr>
        <?php } ?>

    </table>
</div>
</body>
</html>