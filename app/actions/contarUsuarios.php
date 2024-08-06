<?php

connect();
function contarAlunos() {
  global $mysqli;

  $sql = "SELECT COUNT(*) as total_alunos FROM alunos;";
  $result = $mysqli->query($sql);

  if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_alunos = $row['total_alunos'];
  } else {
    $total_alunos = 0;
  }

  return $total_alunos;
}

function contarProfessores() {
  global $mysqli;


  $sql = "SELECT COUNT(*) as total_professores FROM professores;";
  $result = $mysqli->query($sql);

  if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_professores = $row['total_professores'];
  } else {
    $total_professores = 0;
  }

  return $total_professores;
}

function contarPosts() {
  global $mysqli;


  $sql = "SELECT COUNT(*) as total_posts FROM posts;";
  $result = $mysqli->query($sql);

  if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_posts = $row['total_posts'];
  } else {
    $total_posts = 0;
  }

  return $total_posts;
}

