<?php

class Chamado {
    
    private string $arquivo = __DIR__ . '/../../../storage/data/chamados.json';

    public function lerChamados(): array {
        if (file_exists($this->arquivo)) {
            $conteudo = file_get_contents($this->arquivo);
            return json_decode($conteudo, true) ?? [];
        }   
        return [];
    } 

    public function salvarChamados(array $chamados): void {
        $json = json_encode($chamados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        $diretorio = dirname($this->arquivo);
        if (!is_dir($diretorio)) {
            mkdir($diretorio, 0777, true);
        }

        file_put_contents($this->arquivo, $json);
    }

    public function cadastrarChamados(string $nome, string $setor, string $equipamento, string $descricao, string $prioridade): bool {
        if (!empty($nome) && !empty($descricao)) {
            $chamados = $this->lerChamados();

            $novoChamado = [
                "nome" => $nome,
                "setor" => $setor,
                "equipamento" => $equipamento,
                "descricao" => $descricao,
                "prioridade" => $prioridade,
                "status" => "Aberto"
            ];

            $chamados[] = $novoChamado;
            $this->salvarChamados($chamados);

            return true;
        }
        return false;
    }

    public function atualizarStatusChamado(int $posicao, string $novoStatus): bool {
        $chamados = $this->lerChamados();

        if (isset($chamados[$posicao])) {
            $chamados[$posicao]["status"] = $novoStatus;
            $this->salvarChamados($chamados);
            return true;
        }

        return false;
    }

    public function excluirChamado(int $posicao): bool {
        $chamados = $this->lerChamados();

        if (isset($chamados[$posicao])) {
            unset($chamados[$posicao]);
            $chamados = array_values($chamados);

            $this->salvarChamados($chamados);
            return true;
        }

        return false;
    }

    public function gerarRelatorio(?array $chamados = null): array {
        if ($chamados === null) {
            $chamados = $this->lerChamados();
        }

        $total = count($chamados);
        $abertos = 0;
        $emAndamento = 0;
        $resolvidos = 0;

        foreach ($chamados as $chamado) {
            if (($chamado["status"] ?? '') === "Aberto") $abertos++;
            if (($chamado["status"] ?? '') === "Em andamento") $emAndamento++;
            if (($chamado["status"] ?? '') === "Resolvido") $resolvidos++;
        }

        return [
            "total" => $total,
            "abertos" => $abertos,
            "em_andamento" => $emAndamento,
            "resolvidos" => $resolvidos
        ];
    }
}