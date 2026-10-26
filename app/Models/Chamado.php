<?php

class Chamado {

    private string $arquivo;

    public function __construct() {
        // Define o caminho absoluto para o arquivo JSON
        $this->arquivo = __DIR__ . "/../../storage/data/chamados.json";
    }

    // Auxiliar para criar o diretório caso ele não exista
    private function garantirDiretorio(): void {
        $diretorio = dirname($this->arquivo);
        if (!is_dir($diretorio)) {
            mkdir($diretorio, 0777, true);
        }
    }

    // READ - Ler todos os chamados
    public function lerChamados(): array {
        $this->garantirDiretorio();

        if (!file_exists($this->arquivo)) {
            file_put_contents($this->arquivo, "[]");
        }

        $conteudo = file_get_contents($this->arquivo);
        $chamados = json_decode($conteudo, true);

        return is_array($chamados) ? $chamados : [];
    }

    // Salvar os chamados no JSON
    public function salvarChamados(array $chamados): bool {
        $this->garantirDiretorio();

        return file_put_contents(
            $this->arquivo,
            json_encode($chamados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        ) !== false;
    }

    // CREATE - Cadastrar chamados
    public function cadastrarChamados(string $nome, string $setor, string $equipamento, string $descricao, string $prioridade): bool {
        if (trim($nome) === "" || trim($descricao) === "") {
            return false;
        }

        $chamados = $this->lerChamados();

        $novoChamado = [
            "nome" => trim($nome),
            "setor" => $setor,
            "equipamento" => $equipamento,
            "descricao" => trim($descricao),
            "prioridade" => $prioridade,
            "status" => "Aberto"
        ];

        $chamados[] = $novoChamado;

        return $this->salvarChamados($chamados);
    }

    // UPDATE - Atualizar status do chamado
    public function atualizarChamado(int $posicao, string $novoStatus): bool {
        $chamados = $this->lerChamados();
        
        $statusPermitidos = ["Aberto", "Em andamento", "Resolvido"];

        if (!isset($chamados[$posicao])) {
            return false;
        }

        if (!in_array($novoStatus, $statusPermitidos, true)) {
            return false;
        }

        $chamados[$posicao]["status"] = $novoStatus;

        return $this->salvarChamados($chamados);
    }

    // DELETE - Excluir chamados
    public function excluirChamado(int $posicao): bool {
        $chamados = $this->lerChamados();

        if (!isset($chamados[$posicao])) {
            return false;
        }

        unset($chamados[$posicao]);
        $chamados = array_values($chamados);

        return $this->salvarChamados($chamados);
    }

    // Relatório de atendimentos
    public function gerarRelatorio(): array {
        $chamados = $this->lerChamados();

        $relatorio = [
            "total" => count($chamados),
            "abertos" => 0,
            "andamento" => 0,
            "resolvidos" => 0
        ];

        foreach ($chamados as $chamado) {
            $status = $chamado["status"] ?? '';
            if ($status === "Aberto") {
                $relatorio["abertos"]++;
            } elseif ($status === "Em andamento") {
                $relatorio["andamento"]++;
            } elseif ($status === "Resolvido") {
                $relatorio["resolvidos"]++;
            }
        }

        return $relatorio;
    }
}
