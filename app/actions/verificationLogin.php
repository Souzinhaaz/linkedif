<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once("../config/connectDB.php");
require_once("../config/validacoes.php");

$msg;

// Essa função retira os espaços em branco, retira as barras invertidas e muda
// os caracteres especiais html.
function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$email = validate($_POST['email']);
$password = validate($_POST['password']);

if (empty($email)) {
    $msg = "O campo email está vazio.";
} else if (empty($password)) {
    $msg = "O campo da senha está vazio";
} else {
    if (verificarEmail($email)) {
        verificarSenha($email, $password);
    } else {
        $msg = "Usuário ou senha incorretos";
        header("Location: ../pages/public/login.php?msg-error={$msg}");
    }
}
