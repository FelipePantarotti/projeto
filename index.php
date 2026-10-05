<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Lista de Atividades</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <h2 class="logo">Meu Portfólio</h2>

            <ul class="menu">
                <li><a href="#inicio">Início</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#habilidades">Habilidades</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="inicio" class="inicio">
            <div class="inicio-conteudo">

                <p class="saudacao">Olá! Eu sou</p>
                <h1>Felipe Pantarotti</h1>
                <h2>Desenvolvedor em formação</h2>
                <p>Sou estudante de desenvolvimento de sistemas,
                    Em busca de oportunidades para aplicar
                    meus conhecimentos em projetos reais.
                </p>

                <a href="#projetos" class="botao">
                    Ver meus projetos
                </a>
            </div>
        </section>

        <section id="sobre" class="secao">
            <h2 class="titulo-secao">Sobre mim</h2>
            <div class="sobre-conteudo">
                <div class="foto">
                    JS
                </div>
                <div class="sobre-texto">
                    <h3>Quem sou eu?</h3>
                    <p>
                        Meu nome é Felipe e sou estudante
                        de Desenvolvimento de sistemas.
                    </p>
                    <p>
                        Atualmente estou estudando desenvolvimento 
                        web, programação e criação de sistemas.
                        Este portfólio reúne alguns dos projetos
                        desenvolvidos por mim.
                    </p>
                    <p>Meu objetivo é continuar evoluindo como
                        desenvolvedor e aprender novas tecnologias.
                    </p>
                </div>
            </div>
        </section>

        <section id="habilidades" class="secao secao-destaque">
            <h2 class="titulo-secao">Minhas habilidades</h2>
            <p class="subtitulo-secao">
                Algumas tecnologias que estou estudando:
            </p>
            <div class="lista-habilidades">
                <div class="habilidade">
                    HTML
                </div>
                <div class="habilidade">
                    CSS
                </div>
                <div class="habilidade">
                    PHP
                </div>
            </div>
        </section>

        <section>
            <section id="projetos" class="secao">
                <h2 class="titulo-secao">Meus Projetos</h2>
                <p class="subtitulo-secao">
                    Alguns projetos desenvolvidos durantes as aulas.
                </p>
                <div class="projetos-container">
                    <!-- PROJETO 1 -->
                     <div class="projeto-card">
                        <div class="projeto-numero">
                            01
                        </div>
                        <h3>Verificação de Idade</h3>
                        <p>
                            Sistema desenvolvido para praticar
                            formulários e manipulação de dados.
                        </p>
                        <div class="tecnologia">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>PHP</span>
                        </div>
                        <a href="projetos/idade.php" class="link-projeto">
                            Ver projeto ⮕
                        </a>

                     </div>
                     <!-- PROJETO 2 -->
                     <div class="projeto-card">
                        <div class="projeto-numero">
                            02
                        </div>
                        <h3>Verificador de notas</h3>
                        <p>
                            Aplicação simples criada para praticar manipulação de 
                            formulários, cálculos e validação de dados.
                        </p>
                        <div class="tecnologia">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>PHP</span>
                        </div>
                        <a href="projetos/notas.php" class="link-projeto">
                            Ver projeto ⮕
                        </a>
                     </div>

                     <!-- PROJETO 3 -->
                     <div class="projeto-card">
                        <div class="projeto-numero">
                            03
                        </div>
                        <h3>Login básico</h3>
                        <p>
                            Verificação simples de login, com uma mensagem
                            informando se o login está correto ou não.
                        </p>
                        <div class="tecnologia">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>PHP</span>
                        </div>
                        <a href="projetos/login-basico.php" class="link-projeto">
                            Ver projeto ⮕
                        </a>
                     </div>

                     <!-- PROJETO 4 -->
                     <div class="projeto-card">
                        <div class="projeto-numero">
                            04
                        </div>
                        <h3>Cadastro de jogos</h3>
                        <p>
                            Conexão com banco de dados e criação de
                            tabela com sql.
                        </p>
                        <div class="tecnologia">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>PHP</span>
                        </div>
                        <a href="projetos/jogos.php" class="link-projeto">
                            Ver projeto ⮕
                        </a>
                     </div>
                </div>
            </section>

            <section id=contato class="secao secao-destaque">
                <h2 class="titulo-secao">Contato</h2>
                <p class="subtitulo-secao">
                    Quer entrar em contato comigo?
                </p>
                <div class="contato-container">
                    <div class="contato-item">
                        <h3>Email</h3>
                        <p>felipepantarotti@gmail.com</p>
                    </div>
                    <div class="contato-item">
                        <h3>GitHub</h3>
                        <p>github.com/FelipePantarotti</p>
                    </div>
                </div>
            </section>
        </section>
    </main>
</body>
</html>