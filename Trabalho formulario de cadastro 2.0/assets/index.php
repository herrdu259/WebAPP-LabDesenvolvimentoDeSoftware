<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/system.css">
    <title>Atha</title>
</head>

<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <h1>Atha</h1>
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="system.php" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Grupos</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Amigos</a></li>
                    <li class="nav-item"><a href="perfil.php" class="nav-link">Perfil</a></li>
                    <li class="nav-item"><a href="sair.php" class="nav-link"> Sair</a></li>
                </ul>
            </div>
            <?php
                if (isset($_SESSION["useruid"]))
            ?>
            <div class="login-button">
                <button><a href="login.php">Entrar</a></button>
                <button><a href="registro.php">Cadastre-se</a></button>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="assets/img/menu_white_36dp.svg" alt=""></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                    <li class="nav-item"><a href="index.php" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="grupo.php" class="nav-link">Grupos</a></li>
                    <li class="nav-item"><a href="amigo.php" class="nav-link">Friends</a></li>
                    <li class="nav-item"><a href="perfil.php" class="nav-link">Perfil</a></li>
                    <li class="nav-item"><a href="sair.php" class="nav-link"> Sair</a></li>
            </ul>

            <div class="login-button">
                <button><a href="#">Entrar</a></button>
                <button><a href="registro.php">Cadastre-se</a></button>
            </div>
        </div>
    </header>
    <script src="assets/js/script.js"></script>



    <main>

    </main>
    


    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <h1>Atha</h1>
                <p>It's all about your dreams.</p>

                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>

        <div id="footer_copyright">
            &#169
            2023 all rights reserved
        </div>
    </footer>

</body>
</html>