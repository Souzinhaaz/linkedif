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

        <style>
            a {
                color: rgb(88, 182, 115);
            }
        </style>
    </head>
    <body>
        
    <?php 
        require_once("../partials/header.php");
    ?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">LinkedIF</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="../../index.php">Menu</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Paginas</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="cursos.php">Cursos</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
        
        <div class="text-center" >
            <h6 class="section-title bg-white text-center text-primary px-3">Para quem deseja ingressar...</h6>
            <h1>Materiais para estudo</h1>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                                <h5 class="mb-3">Materiais de Estudo</h5>
                                <p>Acesse os materiais de estudo <br><a href="https://drive.google.com/drive/folders/16L13PSswT0YUNURPgFykNkQPfVacVhWB" target="_blank"> clicando aqui</a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-home text-primary mb-4"></i>
                                <h5 class="mb-3">Provas para Estudos</h5>
                                <p>Acesse as provas anteriores <br><a href="https://drive.google.com/drive/mobile/folders/1-14ioV9YdnHnOASGCS3DFcMTnKZWoqs6?usp=drive_open" target="_blank"> clicando aqui</a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                                <h5 class="mb-3">Provas com Gabarito</h5>
                                <p>Acesse as provas anteriores com gabarito <a href="https://drive.google.com/drive/folders/1L0fmvWbt-PJaeyt2ZmdzGNZi1f3UdjFp" target="_blank"> clicando aqui</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
            require_once("../partials/footer.php")
        ?>
    </body>
</html>