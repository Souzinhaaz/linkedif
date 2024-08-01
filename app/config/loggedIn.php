<?php

if (!isset($_SESSION)) {
  session_start();
}

if (isset($_SESSION['id_aluno'])) {
  header("Location: ../private/areaAluno.php");
}

if (isset($_SESSION['id_professor'])) {
  header("Location: ../private/areaProf.php");
}