<?php

require_once("../config/connectDB.php");

$msg;

if (empty($_POST['title'])) {            
    $msg = "Informe algum título";
} else if (empty($_POST['content'])) {
    $msg = "Escreva alguma coisa no conteúdo.";
    if (strlen($_POST['content']) < 40) {
      $msg = "O conteúdo é muito pequeno.";
    }
} else {

    $titulo = $_POST['title'];
    $conteudo = $_POST['content'];

    connect();
 
    $sql = "INSERT INTO posts(titulo, conteudo) VALUES (?, ?);";

    $stmt = $mysqli->prepare($sql);

    if (!$stmt) {
        die("Erro ao inserir, Problema no acesso ao banco de dados");
    }

    $stmt->bind_param("ss", $titulo, $conteudo);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        $msg = "Post cadastrado com sucesso!";
        header("Location: ../pages/private/areaAluno.php?msg-success={$msg}");
    } else {
        $msg = "Erro ao cadastrar o post!";
        header("Location: ../pages/private/newPost.php?msg-error={$msg}");
    }

    close();
}
