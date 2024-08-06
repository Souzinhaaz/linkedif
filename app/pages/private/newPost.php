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

<body style="background-color: #eee;">
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
        <div class="card-body p-md-5 ">

          <div class="text-center mb-5">
            <h4 class="mt-4 mb-3 pb-1 display-6">Crie uma nova Postagem </h4>
          </div>

          <form method="POST" action="../../actions/cadastroPost.php">

            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="title">Titulo</label>
              <input type="text" id="title" name="title" class="form-control" placeholder="Informe o título da sua postagem" />
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="content">Conteúdo</label>
              <textarea name="content" id="content" class="form-control"></textarea>
            </div>

            <div class="text-center pt-1 mb-5 pb-1 d-flex flex-column">
              <button class="btn btn-primary">Criar nova postagem</button>
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