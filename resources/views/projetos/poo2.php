<?php
// ==========================================
// SISTEMA DE CONTROLE DE PRODUÇÃO INDUSTRIAL
// ==========================================

// 1. CLASSE ABSTRATA
abstract class Maquina {
    public $nome;
    private $producao;

    public function __construct($nome){
        $this->nome = $nome;
        $this->producao = 0;
    }

    public function getProducao(){
        return $this->producao;
    }

    public function registrarProducao($quantidade){
        if ($quantidade <= 0){
            return false;
        }

        $this->producao += $quantidade;
        return true;
    }

    // ABSTRAÇÃO
    abstract public function operar();
}

// 2. HERANÇA
class Esteira extends Maquina {
    public function operar(){
        return "Transportando peças...";
    }
}

class Prensa extends Maquina {
    public function operar(){
        return "Prensando peças...";
    }
}

class RoboSoldagem extends Maquina {
    public function operar(){
        return "Soldando peças...";
    }
}

// 3. SESSÃO = ARMAZENAMENTO TEMPORÁRIO
if (!isset($_SESSION["máquinas"])){
    $_SESSION["máquinas"] = [];
}

$mensagem = "";

// 4. RECEBER FORMULÁRIO VIA POST
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $nome = $_POST["nome"] ?? "";
    $tipo = $_POST["tipo"] ?? "";
    $quantidade = $_POST["quantidade"] ?? null;

    if ($nome === "" ||
        $quantidade === false ||
        $quantidade <= 0){
        $mensagem = "Preencha os campos corretamente!";
    }
    else {
        // CRIANDO OBJETOS COM BASE NO FORMULÁRIO
        if ($tipo === "esteira"){
            $maquina = new Esteira($nome);
        }
        else if ($tipo === "prensa"){
            $maquina = new Prensa($nome);
        }
        else if ($tipo === "robosoldagem"){
            $maquina = new RoboSoldagem($nome);
        }

    // EXECUTANDO OS MÉTODOS DO OBJETO
    $maquina->registrarProducao($quantidade);

    // GUARDANDO O OBJETO NA SESSÃO
    $_SESSION["máquinas"][] = $maquina;

    $mensagem = "Máquina cadastrada com sucesso!";


    }
}

// EVITAR INTERPRETAR TEXTOS COMO HTML
function escapar($texto){
    return htmlspecialchars((string) $texto, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Nome da máquina</label>
        <input type="text" name="tipo">
    </form>
</body>
</html>