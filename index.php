<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista de Atividades</title>
</head>
<body>
    <!-- Criamos uma div aqui para agrupar as mensagens e centrá-las acima do card -->
    <div style="text-align: center; margin-bottom: 20px;">
        <?php
            // O require e os ecos passam para dentro do HTML
            require "conexao.php";

            echo "<br>Meu sistema está conectado!<br>";

            $sql = "CREATE TABLE IF NOT EXISTS teste (
                id INT AUTO_INCREMENT PRIMARY KEY,
                nome VARCHAR(100),
                idade INT
            )";

            $pdo->exec($sql);

            echo "Tabela criada com sucesso!<br>";
        ?>
    </div>

    <div class="container">
        <a href="idade.php" class="bt-voltar">Verificador de idade</a><br><br>
        <a href="notas.php" class="bt-voltar">Verificador de notas</a><br><br>
        <a href="login-basico.php" class="bt-voltar">Login básico</a><br><br>
        <a href="jogos.php" class="bt-voltar">Cadastro de jogos</a>
    </div>
</body>
</html>