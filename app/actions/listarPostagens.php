<?php

connect();

$sql = "SELECT id_post, titulo, conteudo FROM posts;";

$result = $mysqli->query($sql);

if($result->num_rows > 0){
   $listaPosts = $result->fetch_all(MYSQLI_ASSOC);
}

close();

return $listaPosts;