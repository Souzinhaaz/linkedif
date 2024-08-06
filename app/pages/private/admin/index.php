<?php
include("../../../config/connectDB.php");
include("../../../actions/contarUsuarios.php");

$total_alunos = contarAlunos();
$total_professores = contarProfessores();
$total_usuarios = $total_alunos + $total_professores;
$total_posts = contarPosts();
close();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>LinkedIF</title>
  <!-- Favicon -->
  <link href="../../../../public/img/globo.png" rel="icon">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="css/admin.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <?php
  require_once("./partials/sideHeader.php");
  ?>
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Dashboard do sistema</li>
        </ol>
        <div class="row">
          <div class="card col mx-4">
            <div class="card-body d-flex align-items-center justify-content-center flex-column">
              <h4 class="card-title text-center">Total de alunos cadastrados no sistema</h4>
              <h1 class="card-text text-center"><?php echo $total_alunos ?></h1>
              <a href="formAluno.php" class="btn btn-lg btn-primary mt-4">Cadastrar Aluno</a>
            </div>
          </div>

          <div class="card col mx-4">
            <div class="card-body d-flex align-items-center justify-content-center flex-column">
              <h4 class="card-title text-center">Total de professores cadastrados no sistema</h4>
              <h1 class="card-text text-center"><?php echo $total_professores ?></h1>
              <a href="formProf.php" class="btn btn-lg btn-success mt-4">Cadastrar Professor</a>
            </div>
          </div>

          <div class="card col mx-4">
            <div class="card-body d-flex align-items-center justify-content-center flex-column">
              <h4 class="card-title text-center">Total de usuários no sistema</h4>
              <h1 class="card-text text-center"><?php echo $total_usuarios ?></h1>
            </div>
          </div>
          
          <div class="card col mx-4">
            <div class="card-body d-flex align-items-center justify-content-center flex-column">
              <h4 class="card-title text-center">Total de posts cadastrados</h4>
              <h1 class="card-text text-center"><?php echo $total_posts ?></h1>
            </div>
          </div>

        </div>
      </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
      <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
          <div class="text-muted">Copyright &copy; LinkedIF 2024</div>
          <div>
            <a href="#">Política de Privacidade</a>
            &middot;
            <a href="#">Termos &amp; Condições </a>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/admin.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>

</html>