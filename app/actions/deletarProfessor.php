<?php

if (empty($_GET['id_professor'])) {
  $msg = "Houve um erro ao tentar deletar o professor";
} else {

  $id_professor = $_GET['$id_professor'];

  connect();

  $sql = "DELETE FROM professores WHERE id_professor=?;";

  $stmt = $mysqli->prepare($sql);

  if (!$stmt) {
    die("Erro ao deletar, Problema no acesso ao banco de dados");
  }

  $stmt->bind_param("i", $id_professor);

  if ($result->num_rows > 0) {
    $msg = "Professor deletado com sucesso!";
  }

  close();
}
