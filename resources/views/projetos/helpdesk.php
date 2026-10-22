<?php

require_once "Chamado.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $acao = $_POST["acao"] ?? "";

    if ($acao == "cadastrar") {
        $nome = $_POST["nome"] ?? "";
        $setor = $_POST["setor"] ?? "";
        $equipamento = $_POST["equipamento"] ?? "";
        $descricao = $_POST["descricao"] ?? "";
        $prioridade = $_POST["prioridade"] ?? "";

        cadastrarChamados($nome, $setor, $equipamento, $descricao, $prioridade);
    } 
    else if ($acao == "atualizar") {
        $posicao = $_POST["posicao"] ?? null;
        $novoStatus = $_POST["status"] ?? "";

        if ($posicao !== null) {
            atualizarStatusChamado($posicao, $novoStatus);
        }
    }           
    else if ($acao == "excluir") {
        $posicao = $_POST["posicao"] ?? null;

        if ($posicao !== null) {
            excluirChamado($posicao);
        }
    }

    // Redireciona para evitar reenvio de formulário ao atualizar com F5 (Padrão PRG)
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$chamados = lerChamados();
$relatorio = gerarRelatorio($chamados);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/helpdesk.css">
    <title>Chamados</title>
</head>
<body>
    <form method="POST">

        <label>Nome:</label>
        <input type="text" name="nome" required>

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
        <textarea name="descricao" required></textarea>

        <label>Prioridade:</label>
        <select name="prioridade" id="prioridade">
            <option value="baixa">Baixa</option>
            <option value="media">Média</option>
            <option value="alta">Alta</option>
        </select>

        <input type="hidden" name="acao" value="cadastrar">

        <button type="submit">Enviar</button>
        
        <a href="/index.php" class="bt-voltar">Voltar ao início</a>

    </form>

    <h2>Lista Dos Chamados</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Setor</th>
                <th>Equipamento</th>
                <th>Descrição</th>
                <th>Prioridade</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($chamados as $posicao => $chamado){ ?>
                <tr>
                    <td><?php echo htmlspecialchars($posicao); ?></td>
                    <td><?php echo htmlspecialchars($chamado['nome']); ?></td>
                    <td><?php echo htmlspecialchars($chamado['setor']); ?></td>
                    <td><?php echo htmlspecialchars($chamado['equipamento']); ?></td>
                    <td><?php echo nl2br(htmlspecialchars($chamado['descricao'])); ?></td>
                    <td><?php echo htmlspecialchars($chamado['prioridade']); ?></td>
                    
                    <td>
                        <form method="POST">
                            <input type="hidden" name="acao" value="atualizar">
                            <input type="hidden" name="posicao" value="<?php echo $posicao; ?>">
                            
                            <select name="status">
                                <option value="Aberto" <?php if(($chamado['status'] ?? '') == 'Aberto') echo 'selected'; ?>>Aberto</option>
                                <option value="Em andamento" <?php if(($chamado['status'] ?? '') == 'Em andamento') echo 'selected'; ?>>Em andamento</option>
                                <option value="Resolvido" <?php if(($chamado['status'] ?? '') == 'Resolvido') echo 'selected'; ?>>Resolvido</option>
                            </select>
                            <button type="submit">OK</button>
                        </form>
                    </td>

                    <td>
                        <form method="POST" onsubmit="return confirm('Deseja realmente excluir este chamado?');">
                            <input type="hidden" name="acao" value="excluir">
                            <input type="hidden" name="posicao" value="<?php echo $posicao; ?>">
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>  

    <div>
        <h3>Relatório de Atendimentos</h3>
        <p>Total de chamados: <?php echo htmlspecialchars($relatorio["total"] ?? 0); ?></p>
        <p>Abertos: <?php echo htmlspecialchars($relatorio["abertos"] ?? 0); ?></p>
        <p>Em andamento: <?php echo htmlspecialchars($relatorio["em_andamento"] ?? 0); ?></p>
        <p>Resolvido: <?php echo htmlspecialchars($relatorio["resolvidos"] ?? 0); ?></p>
    </div>

</body>
</html>