<!DOCTYPE html>
<html lang="en">

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
        <h1 class="mt-4">Tabela de Administradores</h1>
        <div class="row">
          <div class="card mb-4">
            <div class="card-body">
              <table id="datatablesSimple">
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
                <tbody>
                  <tr>
                    <?php
                    include_once("../../../actions/listarAdmin.php");
                    if ($listaAdmin) {
                      foreach ($listaAdmin as $admin) {
                        echo "<td>" . $admin['id_admin'] . "</td>";
                        echo "<td>" . $admin['nome'] . "</td>";
                        echo "<td>" . $admin['email'] . "</td>";
                        echo "<td>" . $admin['telefone'] . "</td>";
                        echo "<td><a href='../../actions/editarAdmin.php?acao=pesquisarPorId&id_admin=" . $admin['id_admin'] . "'>Editar</a></td>";
                        echo "<td><a href='../../actions/deletarAdmin.php?acao=excluirAdmin&id_admin=" . $admin['id_admin'] . "'>Excluir</a></td>";
                      }
                    } else {
                      echo "Nenhum professor encontrado";
                    }
                    ?>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
      <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
          <div class="text-muted">Copyright &copy; Your Website 2023</div>
          <div>
            <a href="#">Privacy Policy</a>
            &middot;
            <a href="#">Terms &amp; Conditions</a>
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