<?php

require_once("../config/connectDB.php");

connect();

$sql = "SELECT id_aluno, nome, email, telefone FROM alunos;";

$result = $mysqli->query($sql);

if($result->num_rows > 0){
   $listaAlunos = $result->fetch_object();
}

close();

return $listaAlunos;