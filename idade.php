<?php
        $nome = "";
        $idade = "";
        $resultado = "";

        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $nome = $_POST["name"];
            $idade = $_POST["idade"];
        }
        if ($idade >= 18){
            $resultado = "maior de idade";
        }
        else {
            $resultado = "menor de idade";
        }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.php">
    <title>Verificador de idade</title>
</head>
<body>
    <div class="container">
        

    <form method="POST">
        
        <input type="text" id="name" name="name" placeholder="Digite seu nome">

        <input type="number" id="idade" name="idade" placeholder="Digite sua Idade">

        <button type="submit">Enviar</button>

        
    </form>

    <?php if ($resultado != "") { ?>

        <h2><?= $nome ?> é <?= $resultado ?>.</h2>

    <?php } ?>
    </div>
</body>
</html>
