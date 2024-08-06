<?php
require_once("../config/connectDB.php");
$msg;

if (empty($_POST['name'])) {
  $msg = "Preencha o campo do nome";
} else if (empty($_POST['id_professor'])) {
  $msg = "ID inválido";
} else if (empty($_POST['email'])) {
  $msg = "Por favor, preencha o campo do email";
} else if (empty($_POST['telephone'])) {
  $msg = "Por favor, insira o seu número de telefone";
} else if (empty($_POST['cpf'])) {
  $msg = "Por favor, insira o seu número de CPF";
} else {
  $id_professor = $_POST['id_professor'];
  $nome = $_POST['name'];
  $email = $_POST['email'];
  $telefone = $_POST['telephone'];
  $cpf = $_POST['cpf'];


  connect();

  $sql = "UPDATE professores SET nome=?, email=?, telefone=?, cpf=? WHERE id_professor=?";

  $stmt = $mysqli->prepare($sql);

  if (!$stmt) {
    die("Erro ao inserir, Problema no acesso ao banco de dados");
  }

  $stmt->bind_param("ssssi", $nome, $email, $telefone, $cpf, $id_professor);

  $stmt->execute();

  if ($stmt->affected_rows == 1) {
    $msg = "Professor atualizado com sucesso!";
    header("Location: ../pages/private/admin/tabelaProf.php?msg-success={$msg}");
  } else {
    $msg = "Erro ao atualizar professor!";
    header("Location: ../pages/private/admin/formEditarProf.php?msg-error={$msg}");
  }

  close();
}
