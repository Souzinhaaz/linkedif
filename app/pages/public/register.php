<?php 

require_once("../../config/loggedIn.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Linkedif</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- Favicon -->
  <link href="../../../public/img/globo.png" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="../../../public/css/style.css" rel="stylesheet">

  <!-- Login Stylesheet -->
   <link href="../../../public/css/login.css" rel="stylesheet">

  
</head>

<body>
  <?php 
    require_once("../partials/header.php");
  ?>
  <?php
      if (isset($_GET['msg-error'])) {
        echo "<div class='alert alert-danger' role='alert'>
                {$_GET['msg-error']}
            </div>";
      } else if (isset($_GET['msg-sucesso'])) {
        echo "<div class='alert alert-success' role='alert'>
                {$_GET['msg-sucesso']}
            </div>";
      }
    ?>
  <!-- Opções Start -->
  <div class="container">
        <div class="card rounded-3 text-black m-5">
          <div class="row g-0">
            <div class="col-lg-6 d-none align-items-center gradient-custom-2 d-lg-flex">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="display-6 mb-4 text-white">Um site para facilitar sua vida acadêmica.</h4>
                  <p class="mb-0">Oferecemos cursos de todas as matérias que são requisitadas na prova de admissão para o IF Baiano. Dentre todos os recursos que disponibilizamos para os usuários sem conta, oferecemos suporte aos usuários cadastrados.</p>
                </div>
            </div>
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
                <div class="text-center">
                  <img src="../../../public//img//globo.png"
                    style="width: 100px;" alt="logo">
                  <h4 class="mt-4 mb-3 pb-1 display-6">Crie a sua conta</h4>
                </div>

                <form method="POST" action="../../actions/cadastroAluno.php">
                  <p>Crie a sua conta como aluno.</p>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="name">Nome</label>
                    <input type="text" id="name" name="name" class="form-control"
                      placeholder="Informe o seu nome" />
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control"
                      placeholder="Informe o seu email" />
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="telephone">Telefone</label>
                    <input type="tel" id="telephone" name="telephone" class="form-control"
                      placeholder="Informe o seu telefone" />
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" class="form-control"
                      placeholder="Informe o seu email" />
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="password">Senha</label>
                    <input type="password" placeholder="Insira a sua senha" id="password" name="password" class="form-control" />
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1 d-flex flex-column">
                    <button class="btn btn-primary">Cadastrar</button>
                    <a class="text-muted py-2" href="#!">Esqueceu a sua senha?</a>
                    <p class="text-muted py-2">Já possui uma conta? <a href="login.php">Fazer Login</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  <!-- Opções End -->

  <?php
    require_once("../partials/footer.php")
  ?>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="../../../public/js/main.js"></script>
</body>

</html>
