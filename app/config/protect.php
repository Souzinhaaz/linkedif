<?php 

if (!isset($_SESSION)) {
  session_start();
}

if (!isset($_SESSION['id_aluno'])) {
  header ("Location: ../public/login.php");
}
