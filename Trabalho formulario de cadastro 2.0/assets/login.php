<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulário de Cadastro</title>
</head>

<body>
    <!-- Div para inserir a imagem na tela -->
    <div class="container">
        <div class="form-image">
            <img src="img/undraw_team_collaboration_re_ow29.svg">
        </div>

        <!-- Div classe form contém todo o formulario de Login -->
        <div class="form">
            <form action="includes/login.inc.php" method="post">

                <!-- Código que contém os botões para ir até a pagina de Registro -->
                <div class="form-header">
                    <div class="tittle">
                        <h1>Entre</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="registro.php">Cadastre-se</a></button>
                    </div>
                </div>

                <!-- Div classe input-group que contem todos os itens do cadastro como nome, usuario, senha, email, etc... -->
                <div class="input-group">
                    <div class="input-box">
                        <label for="email"></label>
                        <input id="email" type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-box">
                        <label for="password"></label>
                        <input id="password" type="password" name="password" placeholder="Senha" required>
                    </div>
                </div>


                
            </form>

                <!-- Div para o botão continuar -->
                <div class="continue-button">
                    <button><a href="#">Entrar</a></button>
                </div>

            
            <!-- Tratativa de possiveis erros -->
                <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "camposvazios"){
                            echo "Preencha todos os campos!";
                        }
                        elseif ($_GET["error"] == "errorlogin"){
                            echo "Dados de login incorretos!";
                        }
                    }
                ?>
        </div>
    </div>
</body>
</html>