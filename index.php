<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>
