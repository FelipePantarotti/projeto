<?php
        $nome = "";
        $idade = "";
        $nota1 = "";
        $nota2 = "";
        $nota3 = "";
        $nota4 = "";
        $nota5 = "";
        $resultado = "";

        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $nota3 = $_POST["nota3"];
            $nota4 = $_POST["nota4"];
            $nota5 = $_POST["nota5"];
        
        $media = ($nota1 * 2 + $nota2 * 3 + $nota3 * 1 + $nota4 * 1 + $nota5 * 3) / 10;
        }
        if ($media >= 7){
            $resultado = "aprovado";
        }
        else if ($media >= 5){
            $resultado = "recuperação";
        }
        else {
            $resultado = "reprovado";
        }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verificador de notas</title>
</head>
<body>
<form method="POST">
        
        <input type="text" id="name" name="name" placeholder="Digite seu nome">
        <input type="number" id="idade" name="idade" placeholder="Digite sua Idade">
        <input type="number" id="idade" name="idade" placeholder="Digite sua primeira nota">
        <input type="number" id="idade" name="idade" placeholder="Digite sua segunda nota">
        <input type="number" id="idade" name="idade" placeholder="Digite sua terceira nota">
        <input type="number" id="idade" name="idade" placeholder="Digite sua quarta nota">
        <input type="number" id="idade" name="idade" placeholder="Digite sua quinta nota">

        <button type="submit">Enviar</button>

        
    </form>

    <h2><?= $nome ?>, idade:<?= $idade ?>, media calculada:<?= $media ?></h2>
    <h2>situação do aluno: <?= $resultado ?></h2>
</body>
</html>