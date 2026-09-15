<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>projeto</title>
</head>
<body>
    <div class="container">
        <?php
        $nome = "Felipe";
        $idade = "16";
        $verificar = "";

        if ($idade >= 18){
            $verificar = "Você é maior de idade";
        }
        else {
            $verificar = "Você é menor de idade";
        }
        ?>
        <h1>nome:<?= $nome ?></h1>
        <h2>idade:<?= $idade ?></h2>
        <p><?= $verificar ?></p>
    </div>
</body>
</html>
