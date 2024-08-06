<?php
include_once("../config/connectDB.php");

if (!isset($_GET['id_aluno'])) {
  echo "Houve um erro ao tentar deletar o aluno";
  exit();
}

$id_aluno = $_GET['id_aluno'];
connect();

$sql = "DELETE FROM alunos WHERE id_aluno = ?";

$stmt = $mysqli->prepare($sql);

if (!$stmt) {
  die("Erro ao deletar, problema no acesso ao banco de dados");
}

$stmt->bind_param("i", $id_aluno);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  $msg = "Usuário deletado com sucesso!";
  header("Location: ../pages/private/admin/tabelaAlunos.php?msg-success={$msg}");
} else {
  $msg = "Erro ao deletar o aluno";
  header("Location: ../pages/private/admin/tabelaAlunos.php?msg-error={$msg}");
}

$stmt->close();
close();
