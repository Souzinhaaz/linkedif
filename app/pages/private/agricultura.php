<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>LinkedIF</title>
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
</head>
<body>
    <?php 
        require_once("../partials/header.php");
    ?>

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Cursos</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="../public/home.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="cursos.php">Cursos</a></li>
                            <li class="breadcrumb-item"><a class="text-success" href="agricultura.php">Agricultura</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Agricultura -->
    <div class="container-xxl mb-5">
        <div class="container">
            <div class="text-center" >
                <h6 class="section-title bg-white text-center text-primary px-3">Integrado</h6>
                <h1 class="mb-5">Técnico em Agricultura</h1>
            </div>
            <div>
                <h3>Trata-se de um curso voltado para atividades ligadas à agricultura, em que os profissionais formados podem atuar em empresas de produção e consultoria agrícola; Instituições de assistência técnica, extensão rural e pesquisa; comércio de equipamentos e produtos agrícolas; unidades de produção familiar; Cooperativas e associações de produção agrícola dentre outros. O curso conta com aulas teóricas e aulas em campo, onde os alunos aplicam no campo os conhecimentos passados em sala de aula pelos docentes.</h3>
            </div>
        </div>
    </div>
    <!-- Agricultura end -->


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
    <script src="../../../public/js/main.js"></script>

</body>
