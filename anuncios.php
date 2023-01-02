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
    <title>Anuncios</title>
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
                    <a href="#"><div class="img">
                        <img src="./assets/anuncios/an2.png" alt="Item 1">
                    </div></a>
                    <a href="#"><div class="info">
                        <h3>Bolsas de Estudos</h3>
                    </div></a>
                </div>
                <div class="card1">
                    <a href="#"><div class="img">
                        <img src="./assets/anuncios/an3.png" alt="Item 1">
                    </div></a>
                    <a href="#"><div class="info">
                        <h3>Bolsas de Estudos</h3>
                    </div></a>
                </div>
                <div class="card1">
                    <a href="#"><div class="img">
                        <img src="./assets/anuncios/an4.png" alt="Item 1">
                    </div></a>
                    <a href="#"><div class="info">
                        <h3>Bolsas de Estudos</h3>
                    </div></a>
                </div>
                <div class="card1">
                    <a href="#"><div class="img">
                        <img src="./assets/anuncios/an5.png" alt="Item 1">
                    </div></a>
                    <a href="#"><div class="info">
                        <h3>Bolsas de Estudos</h3>
                    </div></a>
                </div>
                
            </div>

            <div class="panel">
                <div class="imagem">
                    <img src="./assets/anuncios/an1.png" alt="Main Item">
                </div>

                <div class="description">
                    <div class="name">
                        <h2>Pagamento de propina referente ao mês de janeiro</h2>
                    </div>
                    <div class="details">
                        <p>
                            Apesar da especificação não impor requesitos sobre os nomes de classes.
                        </p>
                    </div>
                    <div class="price">
                        <p>Depois do dia 10 de cada mês: <span class="after multa">Kz: 1.500,00</span></p>
                        <p>Antes do dia 10: <span class="before">Kz: 1.500,00</span></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>