<?php

require_once("../config/connectDB.php");

connect();


$sql = "SELECT id_admin, nome, email, telefone FROM administradores;";

$result = $mysqli->query($sql);

if($result->num_rows > 0){
   $listaAdmin = $result->fetch_all(MYSQLI_ASSOC);
}

close();

return $listaAdmin;