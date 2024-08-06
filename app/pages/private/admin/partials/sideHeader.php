<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark d-flex justify-content-between">
  <!-- Navbar Brand-->
  <div class="d-flex">
    <a href="index.php" class="navbar-brand d-flex align-items-center ps-4">
      <h3 class="m-0 text-white d-flex align-items-center gap-2">
        <img src="../../../../public/img/globo.png" height="40vw"> LinkedIF
      </h3>
    </a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
  </div>
  <!-- Navbar-->
  <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
    <li class="nav-item dropdown">
      <a href="../../public/home.php" class="nav-item nav-link text-danger">Sair<i class='fa fa-arrow-right ms-3'></i></a>
    </li>
  </ul>
</nav>
<div id="layoutSidenav">
  <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
      <div class="sb-sidenav-menu">
        <div class="nav">
          <div class="sb-sidenav-menu-heading">Principal</div>
          <a class="nav-link" href="index.php">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Painel de Controle
          </a>
          <div class="sb-sidenav-menu-heading">Administração</div>
          <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
            Usuários
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
          </a>
          <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionRegister">
              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseRegister" aria-expanded="false" aria-controls="pagesCollapseRegister">
                Cadastrar
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
              </a>
              <div class="collapse" id="pagesCollapseRegister" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionRegister">
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="formAluno.php">Alunos</a>
                </nav>
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="formProf.php">Professor</a>
                </nav>
              </div>
            </nav>
            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionDelete">
              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseDelete" aria-expanded="false" aria-controls="pagesCollapseDelete">
                Tabelas
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
              </a>
              <div class="collapse" id="pagesCollapseDelete" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionDelete">
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="tabelaAlunos.php">Alunos</a>
                </nav>
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="tabelaProf.php">Professores</a>
                </nav>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <div class="sb-sidenav-footer">
        <div class="small">Logado como:</div>
        Administrador
      </div>
    </nav>
  </div>