<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/layout.css">
    <title>Layout de Atividades | Meu Portfólio</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <h2 class="logo">
                Meu portfólio
            </h2>
            <ul class="menu">
                <li>
                    <a href="../index.php">Ínicio</a>
                </li>
                <li>
                    <a href="../index.php#projetos">Projetos</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="pagina-projeto">

        <section class="cabecalho-projeto">

            <p class="projeto-tipo">
                Projeto
            </p>

            <h1>
                Cadastro de Jogos
            </h1>

            <p>
                Atividade desenvolvida durante as aulas
                de Desenvolvimento de Sistemas.
            </p>

        </section>

        <section class="conteudo-projeto">


            <h2>Cadastro de Jogos</h2>


            <form method="POST">

                <label for="nome">
                    Nome do jogo:
                </label>

                <input
                    type="text"
                    id="nome"
                    name="nome"
                    required
                >

                <label for="genero">
                    Gênero:
                </label>

                <input
                    type="text"
                    id="genero"
                    name="genero"
                    required
                >

                <label for="nota">
                    Nota:
                </label>

                <input
                    type="number"
                    id="nota"
                    name="nota"
                    min="0"
                    max="10"
                    required
                >

                <button type="submit">
                    Cadastrar
                </button>

            </form>


        </section>

        <div class="voltar-projetos">

            <a href="../index.php#projetos">
                ← Voltar para projetos
            </a>

        </div>


    </main>

    <footer>

        <p>
            Desenvolvido por
            <a href="https://lucasluz.me">
                Lucas Luz
            </a>
            • 2026
        </p>

    </footer>

</body>
</html>