<?php

    require_once "helpdesk-func.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamados</title>
</head>
<body>
    <form method="POST">

        <label>Nome:</label>
        <input type="text" name="nome">

        <label>Setor da empresa:</label>
        <select name="setor" id="setor">
            <option value="producao">Produção</option>
            <option value="administrativo">Administrativo</option>
            <option value="logistica">Logística</option>
            <option value="financeiro">Financeiro</option>
            <option value="ti">TI</option>
        </select>

        <label>Equipamento afetado:</label>
        <select name="equipamento" id="equipamento">
            <option value="computador">Computador</option>
            <option value="impressora">Impressora</option>
            <option value="rede">Rede</option>
            <option value="sistema">Sistema</option>
            <option value="outro">Outro</option>
        </select>

        <label>Descrição do problema:</label>
        <textarea name="descricao"></textarea>

        <label>Prioridade:</label>
        <select name="prioridade" id="prioridade">
            <option value="baixa">Baixa</option>
            <option value="media">Média</option>
            <option value="alta">Alta</option>
        </select>

        <input type="hidden" name="acao" value="cadastrar">

        <button type="submit">Enviar</button>

    </form>

    <h2>Lista Dos Chamados</h2>
    <table>
        <tr>
            <th>N°</th>
            <th>Solicitante</th>
            <th>Setor</th>
            <th>Equipamento</th>
            <th>Descrição</th>
            <th>Prioridade</th>
            <th>Status / Atualizar</th>
            <th>Excluir Chamado</th>
        </tr>
    </table>
</body>
</html>