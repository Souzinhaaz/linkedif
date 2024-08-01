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
                    <h1 class="display-3 text-white">Cursos</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="../public/home.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-success" href="cursos.php">Cursos</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Courses Start -->
    <div class="container-xxl mb-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Cursos</h6>
                <h1 class="mb-5">Cursos Disponiveis</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="../../../public/img/curso-info.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="informatica.php" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;">Leia Mais</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Informática</h3>
                            <h5 class="mb-4">Curso Técnico Integrado</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>40 Ingressantes</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="../../../public/img/curso-agri.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="agricultura.php" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;">Leia Mais</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Agricultura</h3>
                            <h5 class="mb-4">Curso Técnico Integrado</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>40 Ingressantes</small>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="../../../public/img/curso-agro.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="agroecologia.php" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;">Leia Mais</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Agroecologia</h3>
                            <h5 class="mb-4">Curso Técnico Integrado</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>40 Ingressantes</small>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->
        

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
    <script src="../../public/js/script.js"></script>
</body>

</html>