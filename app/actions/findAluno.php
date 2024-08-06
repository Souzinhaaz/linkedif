<?php

function findById($id_aluno) {
  global $mysqli;
  connect();
  
  $sql = "SELECT id_aluno, nome, email, telefone, cpf FROM alunos WHERE id_aluno=?;";
  $stmt = $mysqli->prepare($sql);
  if (!$stmt) {
    die("Erro ao achar, Problema no acesso ao banco de dados");
  }
  $stmt->bind_param("i", $id_aluno);
  $stmt->execute();
  $result = $stmt->get_result();
  
  if($result->num_rows == 1){
    $aluno = $result->fetch_object();
  } else {
    $aluno = false;
  }
  
  close();
  
  if (isset($aluno)) {
     return $aluno;
  }
}