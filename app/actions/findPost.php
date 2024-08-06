<?php

function findById($id_post) {
  global $mysqli;
  connect();
  
  $sql = "SELECT id_post, titulo, conteudo FROM posts WHERE id_post=?;";
  $stmt = $mysqli->prepare($sql);
  if (!$stmt) {
    die("Erro ao encontrar, Problema no acesso ao banco de dados");
  }
  $stmt->bind_param("i", $id_post);
  $stmt->execute();
  $result = $stmt->get_result();
  
  if($result->num_rows == 1){
    $post = $result->fetch_object();
  } else {
    $post = false;
  }
  
  close();
  
  if (isset($post)) {
     return $post;
  }
}