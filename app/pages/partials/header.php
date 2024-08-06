<?php
require_once("../../config/sessionStart.php");
?>

<nav class="navbar navbar-expand-xl bg-white navbar-light shadow sticky-top p-0">
  <a href="../public/home.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    <h2 class="m-0 text-primary d-flex align-items-center gap-2">
      <img src="../../../public/img/globo.png" height="60vw"> LinkedIF
    </h2>
  </a>

  <h3 class="m-0 text-primary d-flex align-items-center m-3">
    <?php
    $finalRoute = require_once("../../config/getRoute.php");

    if ($finalRoute == "areaAluno.php") {
      if (isset($_SESSION['name']) && isset($_SESSION['id_aluno'])) {
        echo "Seja bem-vindo, " . $_SESSION['name'];
      }
    }
    ?>
  </h3>

  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <?php
      $finalRoute = require("../../config/getRoute.php");
      // Se não estiver logado
      if (!isset($_SESSION['id_aluno'])) {
        switch ($finalRoute) {
          case "home.php":
            echo "<i class='bi bi-moon-fill m-auto px-5 h5 link link-success' id='switchTheme' style='cursor: pointer;'></i>";
            echo "<a href='../public/home.php' class='nav-item nav-link'>Pagina Inicial</a>";
            echo "<a href='https://wa.me/557721029545' target='_blank' class='nav-item nav-link'>Contato</a>";
            echo "<a href='../private/cursos.php' class='nav-item nav-link'>Cursos</a>";
            echo "<a href='../public/login.php' class='btn btn-primary nav-item nav-link text-white px-3 me-0 d-flex align-items-center'>Entre aqui<i class='fa fa-arrow-right ms-3'></i></a>";
            break;

          case "login.php":
            echo "<a href='../public/home.php' class='nav-item nav-link'>Pagina Inicial</a>";
            echo "<a href='https://wa.me/557721029545' target='_blank' class='nav-item nav-link'>Contato</a>";
            echo "<a href='../private/cursos.php' class='nav-item nav-link'>Cursos</a>";
            echo "<a href='../public/login.php' class='btn btn-primary nav-item nav-link text-white px-3 me-0 d-flex align-items-center'>Entre aqui<i class='fa fa-arrow-right ms-3'></i></a>";
            break;

          case "cursos.php":
            echo "<a href='../public/home.php' class='nav-item nav-link'>Pagina Inicial</a>";
            echo "<a href='https://wa.me/557721029545' target='_blank' class='nav-item nav-link'>Contato</a>";
            echo "<a href='cursos.php' class='nav-item nav-link active '>Cursos</a>";
            echo "<a href='../public/login.php' class='btn btn-primary nav-item nav-link text-white px-3 me-0 d-flex align-items-center'>Entre aqui<i class='fa fa-arrow-right ms-3'></i></a>";
            break;

          case "agricultura.php":
            echo "<a href='../public/home.php' class='nav-item nav-link'>Pagina Inicial</a>";
            echo "<a href='https://wa.me/557721029545' target='_blank' class='nav-item nav-link'>Contato</a>";
            echo "<a href='../private/cursos.php' class='nav-item nav-link'>Cursos</a>";
            echo "<a href='../public/login.php' class='btn btn-primary nav-item nav-link text-white px-3 me-0 d-flex align-items-center'>Entre aqui<i class='fa fa-arrow-right ms-3'></i></a>";
            break;

          case "agroecologia.php":
            echo "<a href='../public/home.php' class='nav-item nav-link'>Pagina Inicial</a>";
            echo "<a href='https://wa.me/557721029545' target='_blank' class='nav-item nav-link'>Contato</a>";
            echo "<a href='../private/cursos.php' class='nav-item nav-link'>Cursos</a>";
            echo "<a href='../public/login.php' class='btn btn-primary nav-item nav-link text-white px-3 me-0 d-flex align-items-center'>Entre aqui<i class='fa fa-arrow-right ms-3'></i></a>";
            break;

          case "informatica.php":
            echo "<a href='../public/home.php' class='nav-item nav-link'>Pagina Inicial</a>";
            echo "<a href='https://wa.me/557721029545' target='_blank' class='nav-item nav-link'>Contato</a>";
            echo "<a href='../private/cursos.php' class='nav-item nav-link'>Cursos</a>";
            echo "<a href='../public/login.php' class='btn btn-primary nav-item nav-link text-white px-3 me-0 d-flex align-items-center'>Entre aqui<i class='fa fa-arrow-right ms-3'></i></a>";
            break;
        }
      } else {
        switch ($finalRoute) {
          case "home.php":
            echo "<i class='bi bi-moon-fill m-auto px-5 h5 link link-success' id='switchTheme' style='cursor: pointer;'></i>";
            echo "<a href='../public/home.php' class='nav-item nav-link active'>Pagina Inicial</a>";
            echo "<a href='https://wa.me/557721029545' target='_blank' class='nav-item nav-link'>Contato</a>";
            echo "<a href='../private/areaAluno.php' class='nav-item nav-link'>Área do Aluno</a>";
            echo "<a href='../private/cursos.php' class='nav-item nav-link'>Cursos</a>";
            echo "<a href='../private/materiaisEstudo.php' class='nav-item nav-link'>Materiais de Estudo</a>";
            echo "<a href='../../config/logOut.php' class='nav-item nav-link'>Sair<i class='fa fa-arrow-right ms-3'></i></a>";
            break;

          case "areaAluno.php":
            echo "<a href='../public/home.php' class='nav-item nav-link'>Pagina Inicial</a>";
            echo "<a href='https://wa.me/557721029545' target='_blank' class='nav-item nav-link'>Contato</a>";
            echo "<a href='areaAluno.php' class='nav-item nav-link active'>Área do Aluno</a>";
            echo "<a href='cursos.php' class='nav-item nav-link'>Cursos</a>";
            echo "<a href='../private/materiaisEstudo.php' class='nav-item nav-link'>Materiais de Estudo</a>";
            echo "<a href='../../config/logOut.php' class='nav-item nav-link'>Sair<i class='fa fa-arrow-right ms-3'></i></a>";
            break;

          case "cursos.php":
            echo "<a href='../public/home.php' class='nav-item nav-link'>Pagina Inicial</a>";
            echo "<a href='https://wa.me/557721029545' target='_blank' class='nav-item nav-link'>Contato</a>";
            echo "<a href='areaAluno.php' class='nav-item nav-link'>Área do Aluno</a>";
            echo "<a href='cursos.php' class='nav-item nav-link active '>Cursos</a>";
            echo "<a href='../private/materiaisEstudo.php' class='nav-item nav-link'>Materiais de Estudo</a>";
            echo "<a href='../../config/logOut.php' class='nav-item nav-link'>Sair<i class='fa fa-arrow-right ms-3'></i></a>";
            break;

          case "agricultura.php":
            echo "<a href='../public/home.php' class='nav-item nav-link'>Pagina Inicial</a>";
            echo "<a href='https://wa.me/557721029545' target='_blank' class='nav-item nav-link'>Contato</a>";
            echo "<a href='areaAluno.php' class='nav-item nav-link'>Área do Aluno</a>";
            echo "<a href='cursos.php' class='nav-item nav-link active '>Cursos</a>";
            echo "<a href='../private/materiaisEstudo.php' class='nav-item nav-link'>Materiais de Estudo</a>";
            echo "<a href='../../config/logOut.php' class='nav-item nav-link'>Sair<i class='fa fa-arrow-right ms-3'></i></a>";
            break;

          case "agroecologia.php":
            echo "<a href='areaAluno.php' class='nav-item nav-link'>Área do Aluno</a>";
            echo "<a href='cursos.php' class='nav-item nav-link active '>Cursos</a>";
            echo "<a href='../private/materiaisEstudo.php' class='nav-item nav-link'>Materiais de Estudo</a>";
            echo "<a href='../../config/logOut.php' class='nav-item nav-link'>Sair<i class='fa fa-arrow-right ms-3'></i></a>";
            break;

          case "informatica.php":
            echo "<a href='../public/home.php' class='nav-item nav-link'>Pagina Inicial</a>";
            echo "<a href='https://wa.me/557721029545' target='_blank' class='nav-item nav-link'>Contato</a>";
            echo "<a href='areaAluno.php' class='nav-item nav-link'>Área do Aluno</a>";
            echo "<a href='cursos.php' class='nav-item nav-link active '>Cursos</a>";
            echo "<a href='../private/materiaisEstudo.php' class='nav-item nav-link'>Materiais de Estudo</a>";
            echo "<a href='../../config/logOut.php' class='nav-item nav-link'>Sair<i class='fa fa-arrow-right ms-3'></i></a>";
            break;

          case "materiaisEstudo.php":
            echo "<a href='../public/home.php' class='nav-item nav-link'>Pagina Inicial</a>";
            echo "<a href='https://wa.me/557721029545' target='_blank' class='nav-item nav-link'>Contato</a>";
            echo "<a href='areaAluno.php' class='nav-item nav-link'>Área do Aluno</a>";
            echo "<a href='cursos.php' class='nav-item nav-link '>Cursos</a>";
            echo "<a href='../private/materiaisEstudo.php' class='nav-item nav-link active'>Materiais de Estudo</a>";
            echo "<a href='../../config/logOut.php' class='nav-item nav-link'>Sair<i class='fa fa-arrow-right ms-3'></i></a>";
            break;

          case "newPost.php":
            echo "<a href='../public/home.php' class='nav-item nav-link'>Pagina Inicial</a>";
            echo "<a href='https://wa.me/557721029545' target='_blank' class='nav-item nav-link'>Contato</a>";
            echo "<a href='areaAluno.php' class='nav-item nav-link active'>Área do Aluno</a>";
            echo "<a href='cursos.php' class='nav-item nav-link '>Cursos</a>";
            echo "<a href='../private/materiaisEstudo.php' class='nav-item nav-link'>Materiais de Estudo</a>";
            echo "<a href='../../config/logOut.php' class='nav-item nav-link'>Sair<i class='fa fa-arrow-right ms-3'></i></a>";
            break;

          case "formEditarPost.php":
            echo "<a href='../public/home.php' class='nav-item nav-link'>Pagina Inicial</a>";
            echo "<a href='https://wa.me/557721029545' target='_blank' class='nav-item nav-link'>Contato</a>";
            echo "<a href='areaAluno.php' class='nav-item nav-link active'>Área do Aluno</a>";
            echo "<a href='cursos.php' class='nav-item nav-link '>Cursos</a>";
            echo "<a href='../private/materiaisEstudo.php' class='nav-item nav-link'>Materiais de Estudo</a>";
            echo "<a href='../../config/logOut.php' class='nav-item nav-link'>Sair<i class='fa fa-arrow-right ms-3'></i></a>";
            break;
        }
      }
      ?>

    </div>
</nav>
<!-- Navbar End -->