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


        <!-- Div form contém todo o formulario de registro -->
        <div class="form">
            <form action="includes\registro.inc.php" method="post">
                <!-- Código que contém os botões para ir até a pagina de Login -->
                <div class="form-header">
                    <div class="tittle">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login.php">Entrar</a></button>
                    </div>
                </div>


                <!-- Div classe input-group que contem todos os itens do cadastro como nome, usuario, senha, email, etc... -->
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname"></label>
                        <input id="firtname" type="text" name="firstname" placeholder="Nome" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname"></label>
                        <input id="lastname" type="text" name="lastname" placeholder="Sobrenome" required>
                    </div>

                    <div class="input-box">
                        <label for="email"></label>
                        <input id="email" type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-box">
                        <label for="password"></label>
                        <input id="password" type="password" name="password" placeholder="Senha" required>
                    </div>

                    <div class="input-box">
                        <label for="confirmpassword"></label>
                        <input id="confirmpassword" type="password" name="confirmpasswor" placeholder="Confirmar senha" required>
                    </div>

                    <div class="input-box">
                        <label for="college"></label>
                        <input id="college" type="text" name="college" placeholder="instituição de ensino" required>
                    </div>

                    <!-- Div separada para o genero 
                    <div class="gender-inputs">
                        <h6>Gênero</h6>
                    </div> -->

                    <div class="gender-group">

                        

                        <div class="gender-input">
                            <input type="radio" id="female" name="gender">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="male" name="gender">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="other" name="gender">
                            <label for="other">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="none" name="gender">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>

                </div>

                    

                
            </form>

                <!-- Div para o botão continuar -->
                <div class="continue-button">
                    <button name="submit"><a href="registroTrue.php">Continuar</a></button>
                </div>

                <!-- Tratativa de possiveis erros -->
                <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "camposvazios"){
                            echo "Preencha todos os campos!";
                        }
                        elseif ($_GET["error"] == "emailinvalido"){
                            echo "Email inserido invalido";
                        }
                        elseif ($_GET["error"] == "senhasnaoiguais"){
                            echo "As senhas inseridas não são iguais";
                        }
                        elseif ($_GET["error"] == "emailjaexiste"){
                            echo "Email inserido ja existe";
                        }
                        elseif ($_GET["error"] == "stmterro"){
                            echo "Um erro ocorreu";
                        }
                        elseif ($_GET["error"] == "none"){
                            echo "";
                        }
                    }
                ?>
        </div>
    </div>
</body>
</html>