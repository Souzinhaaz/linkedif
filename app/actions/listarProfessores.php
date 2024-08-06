<?php

connect();


$sql = "SELECT id_professor, nome, email, telefone FROM professores;";

$result = $mysqli->query($sql);

if($result->num_rows > 0){

   $listaProfessores = $result->fetch_all(MYSQLI_ASSOC);
   close();
   return $listaProfessores;
}

close();
