<?php
        $nome = "";
        $idade = 0;
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
    <title>projeto</title>
</head>
<body>
    <div class="container">
        

    <form method="POST">
        
        <input type="text" id="name" name="name">

        <input type="number" id="idade" name="idade">

        <button type="submit">Enviar</button>

        
    </form>

    <?php if ($resultado != "") { ?>

        <h2>O <?= $nome ?> é <?= $resultado ?> de idade.</h2>

    <?php } ?>
    </div>
</body>
</html>
