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

    <form action="">
        
    <input type="text" name="%name" placeholder="Digite seu nome">

    <input type="number" idade="%idade" placeholder="Digite sua idade">

    </form>
        
        <?php
        $nome = "";
        $idade = "";
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
