<?php
/* Função para verificar se os todos os campos foram preenchidos com algo */
function vazioDadosInseridos($firstname, $lastname, $email, $password, $confirmpasswor, $college, $gender){
    $result;
    if(empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirmpasswor) || empty($college) || empty($gender)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

/* Função para verificar se o email inserido esta formatado corretamente */
function emailInvalido($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

/* Função para verificar se as duas senhas inseridas são iguais */
function senhaNaoIguais($password, $confirmpasswor){
    $result;
    if($password !== $confirmpasswor){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

/* Função para verificar se o email inserido ja esta cadastrado no banco de dados */
function emailExistente($conn, $email){
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../registro.php?error=stmterro");
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultadoDado = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultadoDado)) {
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

/* Função para criar o usuario no banco de dados */
function createUser($conn, $firstname, $lastname, $email, $password, $confirmpasswor, $college, $gender){
    $sql = "INSERT users (usersNome, usersSobrenome, usersEmail, usersSenha, usersUniver, usersSexo)  VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../registro.php?error=stmterro");
        exit(); 
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $email, $hashedPassword, $college, $gender);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../registro.php?error=none");
    exit();
}

/* Função para verificar se os todos os campos foram preenchidos com algo */
function loginVazio($email, $password) {
    $result;
    if (empty($email) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

/* Função para verificar se os dados inseridos na pagina de login coincidem com algum usuario cadastrado no banco de dados */
function loginUser($conn, $email, $password) {
    $emailExists = emailExistente($conn, $email);

    if ($emailExists === false) {
        header("location: ../login.php?error=errorlogin");
        exit(); 
    }

    $passwordHashed = $emailExists["usersSenha"];
    $checkPassword = password_verify($password, $passwordHashed);

    if ($checkPassword === false) {
        header("location: ../login.php?error=errorlogin");
        exit();
    }
    else if ($checkPassword === true) {
        session_start();
        $_SESSION["userid"] = $emailExists["usersId"];
        $_SESSION["userid"] = $emailExists["UsersEmail"];
        header("location: ../login.php?");
        exit();
    }
}
?>