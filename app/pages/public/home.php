<?php
if (!isset($_SESSION)) {
    session_start();
}
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

    <!-- Dark Mode Stylesheet -->
    <link href="../../../public/css/dark-mode.css" rel="stylesheet">
</head>

<body class="dark">
    <?php
    require_once("../partials/header.php")
    ?>
    <!-- menuzao Start -->
    <div class="container-fluid p-0 mb-5 page-header bg-primary" style="overflow-x: hidden;">
        <div class="owl-carousel-item header-carousel position-relative">
            <img style="visibility: hidden;" src="../../../public/img/background.png" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase">Venha ser IFBaiano!</h5>
                            <h1 class="text-white">Cursos para o ingresso no IFBaiano</h1>
                            <p class="fs-5 text-white mb-2 pb-2">Com cursos preparatórios e rápido acesso as documentações de mais importância.</p>
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-start">
                                <a href="https://www.ifbaiano.edu.br/unidades/lapa/" target="_blank" class="btn btn-primary btn-lg me-sm-3 mb-sm-0">Saiba Mais</a>
                                <a href="login.php" class="btn btn-light btn-lg">Entre Agora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- menuzao End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3 title">Instrutores Qualificados</h5>
                            <p class="description">Matériais produzidos de alunos para alunos, com o auxilio dos professores do institutuo</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center pt-3">
                        <div class="service-item p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3 title">Aulas Online</h5>
                            <p class="description">Aulas ministradas por professores qualificados na área e com total suporte aos alunos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center pt-3">
                        <div class="service-item p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3 title">Projetos Principais</h5>
                            <p class="description">Ajudar os alunos a ingressar no IF Baiano, tornando de facil entendimento os editais disponibilizados.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center pt-3">
                        <div class="service-item p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3 title">Biblioteca de Conteúdos</h5>
                            <p class="description">Disponibilização dos principais editais sobre o IFBaiano e sobre a inscrição.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="../../../public/img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Sobre Nós</h6>
                    <h1 class="mb-4 title">Conheça os Cursos Preparatórios Para o IF</h1>
                    <p class="mb-4 description">Oferecemos cursos de todas as matérias que são requisitadas na prova de admissão para o IF Baiano.</p>
                    <p class="mb-4 description">Dentre todos os recursos que disponibilizamos para os usuários sem conta, oferecemos suporte aos usuários cadastrados.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0 description"><i class="fa fa-arrow-right text-primary me-2"></i>Total Suporte</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0 description"><i class="fa fa-arrow-right text-primary me-2"></i>Aulas Online</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0 description"><i class="fa fa-arrow-right text-primary me-2"></i>Certificados Vitalícios</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0 description"><i class="fa fa-arrow-right text-primary me-2"></i>FAQ</p>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="https://www.ifbaiano.edu.br/unidades/lapa/" target="_blank">Leia Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl pb-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Desenvolvedores</h6>
                <h1 class="mb-5 title">Alunos Fundadores do Projeto</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-2 col-md-6">
                    <div class="student team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid img-time" src="../../../public/img/PA.JPG" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="student bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/pkjmaster/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Pedro Augusto</h5>
                            <small>Aluno</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="student team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid img-time" src="../../../public/img/souza.jpeg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="student bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/souzalzx/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Gustavo de Souza</h5>
                            <small>Aluno</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="student team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid img-time" src="../../../public/img/key.jpeg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="student bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/keylars/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Keyla Rodrigues</h5>
                            <small>Aluna</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="student team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid img-time" src="../../../public/img/noca.jpeg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="student bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/jsantos_noemi/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Noemi Jesus</h5>
                            <small>Aluna</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="student team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid img-time" src="../../../public/img/riquelme.jpeg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="student bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/riquelecostaa/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Riquele Maicana</h5>
                            <small>Aluna</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="student team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid img-time" src="../../../public/img/shaiaiar.jpeg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="student bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com/shayara_mary/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Shayara Mary</h5>
                            <small>Aluna</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

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
    <script src="../../../public/js/script.js"></script>
</body>

</html>