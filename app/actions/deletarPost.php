<?php
include_once("../config/connectDB.php");

if (!isset($_GET['id_post'])) {
  echo "Houve um erro ao tentar deletar o post";
  exit();
}

$id_post = $_GET['id_post'];
connect();

$sql = "DELETE FROM posts WHERE id_post = ?";

$stmt = $mysqli->prepare($sql);

if (!$stmt) {
  die("Erro ao deletar, problema no acesso ao banco de dados");
}

$stmt->bind_param("i", $id_post);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  $msg = "Post deletado com sucesso!";
  header("Location: ../pages/private/areaAluno.php?msg-success={$msg}");
} else {
  $msg = "Erro ao deletar o post";
  header("Location: ../pages/private/areaAluno.php?msg-error={$msg}");
}

$stmt->close();
close();
