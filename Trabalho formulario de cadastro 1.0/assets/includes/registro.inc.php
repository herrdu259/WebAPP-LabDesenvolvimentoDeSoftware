<?php

if (isset($_POST["submit"])) {
    /* Transferindo os dados inseridos no formulario para realizar as verificações */
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpasswor = $_POST["confirmpasswor"];
    $college = $_POST["college"];
    $gender = $_POST["gender"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    /* If para verificar se o usuario esqueceu de inserir algum dado */
    if (vazioDadosInseridos($firstname, $lastname, $email, $password, $confirmpasswor, $college, $gender) !== false){
        header("location: ../registro.php?error=camposvazios");
        exit();
    }
    /* If para verificar se o email inserido é invalido */
    if (emailInvalido($email) !== false){
        header("location: ../registro.php?error=emailinvalido");
        exit();
    }
    /* If para verificar se as duas senhas inseridas são iguais */
    if (senhaNaoIguais($password, $confirmpasswor) !== false){
        header("location: ../registro.php?error=senhasnaoiguais");
        exit();
    }
    /* If para verificar se o email inserido ja foi usado para registrar algum usuario */
    if (emailExistente($conn, $email) !== false){
        header("location: ../registro.php?error=emailjaexiste");
        exit();
    }

    createUser($conn, $firstname, $lastname, $email, $password, $confirmpasswor, $college, $gender);

}
else{
    header("location: ../registro.php");
}


?>