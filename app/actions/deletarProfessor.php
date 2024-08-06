<?php
include_once("../config/connectDB.php");

if (!isset($_GET['id_professor'])) {
  echo "Houve um erro ao tentar deletar o professor";
  exit();
}

$id_professor = $_GET['id_professor'];
connect();

$sql = "DELETE FROM professores WHERE id_professor = ?";

$stmt = $mysqli->prepare($sql);

if (!$stmt) {
  die("Erro ao deletar, problema no acesso ao banco de dados");
}

$stmt->bind_param("i", $id_professor);
$stmt->execute();

if ($stmt->affected_rows > 0) {
  $msg = "Professor deletado com sucesso!";
  header("Location: ../pages/private/admin/tabelaProf.php?msg-success={$msg}");
} else {
  $msg = "Erro ao deletar o professor";
  header("Location: ../pages/private/admin/tabelaProf.php?msg-error={$msg}");
}

$stmt->close();
close();
