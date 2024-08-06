<?php

function findById($id_professor) {
  global $mysqli;
  connect();
  
  $sql = "SELECT id_professor, nome, email, telefone, cpf FROM professores WHERE id_professor=?;";
  $stmt = $mysqli->prepare($sql);
  if (!$stmt) {
    die("Erro ao achar, Problema no acesso ao banco de dados");
  }
  $stmt->bind_param("i", $id_professor);
  $stmt->execute();
  $result = $stmt->get_result();
  
  if($result->num_rows == 1){
    $professor = $result->fetch_object();
  } else {
    $professor = false;
  }
  
  close();
  
  if (isset($professor)) {
     return $professor;
  }
}