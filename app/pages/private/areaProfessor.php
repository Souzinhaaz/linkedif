<?php 
  include("../../config/protProf.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Linkedif</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- Favicon -->
  <link href="../../public/img/globo.png" rel="icon">

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
</head>

<body>
    <?php 
        require_once("../partials/header.php");
    ?>

  <!-- Opções Start -->
  <div class="container-xxl py-5">
    <h1>Dashboard</h1>
      <div class="row py-4">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Criar nova disciplina</h5>
            <p class="card-text">Crie agora uma nova disciplina, importante para poder criar um novo material didático.</p>
            <a href="#" class="btn btn-primary">Criar Disciplina</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Criar novo material didático</h5>
            <p class="card-text">Cria agora um material didático, com sua disciplina referida, seu conteúdo principal e sua descrição.</p>
            <a href="#" class="btn btn-primary">Criar material didático</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Opções End -->

  <div class="container-xxl">
    <h1>Acessar Postagens</h1>
  </div>

  <?php
        require_once("../partials/footer.php")
    ?>

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="../../public/js/main.js"></script>
</body>

</html>