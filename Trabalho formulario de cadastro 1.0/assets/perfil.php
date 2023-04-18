<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/system.css">
    <title>Perfil</title>
</head>

<body>
    
    <nav class="menu-h">
        <ul>
            <li><a href="system.php">Início</a></li>
            <li><a href="#">Grupos</a></li>
            <li><a href="#">Friends</a></li>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="login.php">Sair</a></li>
        </ul>
    </nav>

    <!-- Div para inserir a imagem na tela -->
    <div class="container">

        <!-- Div form contém todo o formulario de registro -->
        <div class="form">
            <form action="includes\registro.inc.php" method="post">

                <!-- Div classe input-group que contem todos os itens de perfil nome, sobrenome, etc... -->
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome</label>
                        <input id="firtname" type="text" name="firstname" placeholder="" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="lastname" placeholder="" required>
                    </div>

                    <div class="input-box">
                        <label for="document">Documento</label>
                        <input id="document" type="text" name="document" placeholder="Digite seu Documento" required>
                    </div>

                    <div class="input-box">
                        <label for="phone">Telefone</label>
                        <input id="phone" type="text" name="phone" placeholder="Digite seu Telefone" required>
                    </div>

                    <div class="input-box">
                        <label for="gender">Genêro</label>
                        <input id="gender" type="text" name="gender" placeholder="" required>
                    </div>

                    <div class="input-box">
                        <label for="college">Instituição de ensino</label>
                        <input id="college" type="text" name="college" placeholder="" required>
                    </div>
                </div>


                </form>
            </div>
        </div>
    </div>

</body>

</html>