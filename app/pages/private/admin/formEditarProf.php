<?php
include("../../../config/connectDB.php");
include("../../../actions/findProf.php");
$professor = findById($_GET['id_professor']);
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
        <h1 class="mt-4">Editar Professor</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="tabelaProf.php">Tabela Professores</a></li>
          <li class="breadcrumb-item active"> <a href="formEditarProf.php"></a>Editar Professor</li>
        </ol>
        <?php
        if (isset($_GET['msg-success'])) {
          echo "<div class='alert alert-success' role='alert'>
                                        {$_GET['msg-success']}
                                    </div>";
        } else if (isset($_GET['msg-error'])) {
          echo "<div class='alert alert-danger' role='alert'>
                                        {$_GET['msg-error']}
                                    </div>";
        }
        ?>
        <div class="card mx-auto d-flex justify-content-center">
          <div class="card-body">
            <h5 class="card-title h2 text-center mb-4">Formulário para professores</h5>
            <form method="POST" action="../../../actions/editarProf.php">
            <input type="hidden" name="id_professor" id="id_professor" value="<?php echo $professor->id_professor ?>">
            
              <div class="form-group mb-4">
                <label for="name" class="mb-2">Nome Completo: </label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $professor->nome ?>" placeholder="Informe o nome">
              </div>

              <div class="form-group mb-4">
                <label for="email" class="mb-2">Email: </label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $professor->email ?>" placeholder="Informe o email: ">
              </div>

              <div class="form-group mb-4">
                <label for="telephone" class="mb-2">Telefone: </label>
                <input type="tel" class="form-control" id="telephone" name="telephone" value="<?php echo $professor->telefone ?>" placeholder="Informe o telefone: ">
              </div>

              <div class="form-group mb-4">
                <label for="cpf" class="mb-2">CPF: </label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $professor->cpf ?>" placeholder="Informe o CPF: ">
              </div>

              <div class="form-group d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-lg w-50">Atualizar</button>
              </div>
            </form>
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