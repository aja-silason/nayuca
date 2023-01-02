<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/items.module.css">
    <link rel="stylesheet" href="./styles//general.module.css">
    <link rel="stylesheet" href="./styles/menu.module.css">
    <script src="./js/showmenu.js"></script>
    <title>Quadros</title>
</head>
<body>
    <div class="container">
        <!--Header Menu e Hide Menu-->
        <header>
            <nav class="nav-bar">
                <div class="logo">
                    <h1>NAYUCA&trade;</h1>
                </div>
                <div class="nav-list">
                    <ul>
                        <li class="nav-item"><a href="./home.html" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="./anuncios.html" class="nav-link">Anúncios</a></li>
                        <li class="nav-item"><a href="./cantina.html" class="nav-link"> Cantina</a></li>
                        <li class="nav-item"><a href="./quadros.html" class="nav-link"> Quadros</a></li>
                        <li class="nav-item"><a href="./biblioteca.html" class="nav-link"> Biblioteca</a></li>
                        <li class="nav-item"><a href="./notas.html" class="nav-link">Notas</a></li>
                        <li class="nav-item"><a href="./perfil.html" class="nav-link"> Perfil</a></li>
                        <li class="nav-item"><a href="./" class="nav-link"> Sair</a></li>

                    </ul>
                </div>
                <div class="login-button">
                    <button><a href="./perfil.html">Aluno</a></button>
                </div>

                <div class="mobile-menu-icon">
                    <button onclick="menuShow()"><img class="icon" src="assets/icons/menu_white_36dp.svg" alt=""></button>
                </div>
            </nav>
            <div class="mobile-menu">
                <ul>
                    <li class="nav-item"><a href="./home.html" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="./anuncios.html" class="nav-link">Anúncios</a></li>
                        <li class="nav-item"><a href="./cantina.html" class="nav-link"> Cantina</a></li>
                        <li class="nav-item"><a href="./quadros.html" class="nav-link"> Quadros</a></li>
                        <li class="nav-item"><a href="./biblioteca.html" class="nav-link"> Biblioteca</a></li>
                        <li class="nav-item"><a href="./notas.html" class="nav-link">Notas</a></li>
                        <li class="nav-item"><a href="./perfil.html" class="nav-link"> Perfil</a></li>
                        <li class="nav-item"><a href="./" class="nav-link"> Sair</a></li>

                </ul>
                <div class="login-button">
                    <button><a href="./perfil.html">Aluno</a></button>
                </div>
            </div>
        </header>
        <div class="corpo">
            <div class="cards">
                <div class="card1">
                    <a href="./assets/livros/lvpdf4.pdf" target="_blank"><div class="img">
                        <img src="./assets/livros/capas/lv1.jpg" alt="Item 1">
                    </div></a>
                    <a href="./assets/livros/lvpdf4.pdf" target="_blank"><div class="info">
                        <h3>Título: Clean Code</h3>
                    </div></a>
                </div>
                <div class="card1">
                    <a href="./assets/livros/lvpdf1.pdf" target="_blank"><div class="img">
                        <img src="./assets/livros/capas/lv3.png" alt="Item 1">
                    </div></a>
                    <a href="./assets/livros/lvpdf1.pdf" target="_blank"><div class="info">
                        <h3>Título: Up to Date</h3>
                    </div></a>
                </div>
                <div class="card1">
                    <a href="./assets/livros/lvpdf4.pdf" target="_blank"><div class="img">
                        <img src="./assets/livros/capas/lv1.jpg" alt="Item 1">
                    </div></a>
                    <a href="./assets/livros/lvpdf4.pdf" target="_blank"><div class="info">
                        <h3>Título: Clean Code</h3>
                    </div></a>
                </div>
                <div class="card1">
                    <a href="./assets/livros/lvpdf4.pdf" target="_blank"><div class="img">
                        <img src="./assets/livros/capas/lv4.jpeg" alt="Item 1">
                    </div></a>
                    <a href="./assets/livros/lvpdf4.pdf" target="_blank"><div class="info">
                        <h3>Título: Nice Job</h3>
                    </div></a>
                </div>
                
                
            </div>

            <div class="panel">
                <div class="imagem">
                    <img src="./assets/livros/capas/lv5.jpeg" alt="Main Item">
                </div>

                <div class="description">
                    <div class="name">
                        <h2>Titulo: BirdBox - "Caixa de Pássaros"</h2>
                    </div>
                    <div class="details">
                        <p>
                            <i>Formado em Engenharia informática pela UGS, pertence a comunidade Dev de Angola desde 2016.</i>
                        </p>
                    </div>
                    <div class="price desp">

                        <!--Aqui vai alternar entre o desponibilidade fisica e digital de acordo ao registro da base de dados-->

                        <p>Desponibilidade:</p>
                        
                        <!--Desp. Fisica-->
                        <p  class="after multa"> Física</p>
                        <p>ou</p>
                        <!--Desp. Digital-->
                        <p class="before">Digital</p>

                    </div>
                    <div class="readbook">
                        <a href="./assets/livros/lvpdf1.pdf" target="_blank">Ler o livro no formato digital</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>