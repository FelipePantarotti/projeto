<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>nome:<?= $nome ?></h1>
<p>idade:<?= $idade ?></p>
    <?php
    $nome = "Felipe";
    $idade = "16";
    if ($idade >= 18){
        echo "Você é maior de idade";
    }
    else {
        echo "Você é menor de idade";
    }
    ?>

</body>
</html>
