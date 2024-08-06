<?php
require_once("../config/connectDB.php");
$msg;

if (empty($_POST['title'])) {
  $msg = "Preencha o titulo";
} else if (empty($_POST['id_post'])) {
  $msg = "ID inválido";
} else if (empty($_POST['content'])) {
  $msg = "Preencha o conteúdo";
} else {

  $id_post = $_POST['id_post'];
  $titulo = $_POST['title'];
  $conteudo = $_POST['content'];

  connect();

  $sql = "UPDATE posts SET titulo=?, conteudo=? WHERE id_post=?";

  $stmt = $mysqli->prepare($sql);

  if (!$stmt) {
    die("Erro ao inserir, Problema no acesso ao banco de dados");
  }

  $stmt->bind_param("ssi", $titulo, $conteudo, $id_post);

  $stmt->execute();

  if ($stmt->affected_rows == 1) {
    $msg = "Post atualizado com sucesso!";
    header("Location: ../pages/private/areaAluno.php?msg-success={$msg}");
  } else {
    $msg = "Erro ao atualizar post!";
    header("Location: ../pages/private/areaAluno.php?msg-error={$msg}");
  }

  close();
}
