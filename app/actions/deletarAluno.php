<?php
// Incluir arquivo de configuração para conexão com o banco de dados
include("../../../config/connectDB.php");

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

if ($stmt->execute()) {
  echo "Usuário deletado com sucesso!";
} else {
  echo "Erro ao deletar o aluno: " . $stmt->error;
}

$stmt->close();
close();
