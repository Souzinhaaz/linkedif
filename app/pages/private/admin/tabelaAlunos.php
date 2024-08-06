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
        <h1 class="mt-4">Tabela de Alunos</h1>
        <?php
        if (isset($_GET['msg-error'])) {
          echo "<div class='alert alert-danger' role='alert'>
                    {$_GET['msg-error']}
                </div>";
        } else if (isset($_GET['msg-success'])) {
          echo "<div class='alert alert-success' role='alert'>
                    {$_GET['msg-success']}
                </div>";
        }
        ?>
        <div class="row">
          <div class="card mb-4">
            <div class="card-body">
              <table id="datatablesSimple">
                <?php
                include("../../../config/connectDB.php");
                include "../../../actions/listarAlunos.php";
                $headfoot = '
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Email</th>
                      <th>Telefone</th>
                      <th>Editar</th>
                      <th>Excluir</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Email</th>
                      <th>Telefone</th>
                      <th>Editar</th>
                      <th>Excluir</th>
                    </tr>
                  </tfoot>
                  ';
                if (isset($listaAlunos)) {
                  echo $headfoot;
                } else {
                  echo "<h3 class='pb-4'>Nenhum aluno encontrado!</h3>";
                }

                if (isset($listaAlunos)) {
                  foreach ($listaAlunos as $aluno) {
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>" . $aluno['id_aluno'] . "</td>";
                    echo "<td>" . $aluno['nome'] . "</td>";
                    echo "<td>" . $aluno['email'] . "</td>";
                    echo "<td>" . $aluno['telefone'] . "</td>";
                    echo "<td><a href='formEditarAluno.php?id_aluno=" . $aluno['id_aluno'] . "'>Editar</a></td>";
                    echo "<td><a href='../../../actions/deletarAluno.php?id_aluno=" . $aluno['id_aluno'] . "'>Excluir</a></td>";
                    echo "</tr>";
                    echo "</tbody>";
                  }
                } else {
                  echo "Nenhum aluno encontrado";
                }
                ?>
              </table>
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