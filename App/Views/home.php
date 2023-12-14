<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
              body {
          padding-top: 3rem;
          padding-bottom: 3rem;
          color: #5a5a5a;
        }
        .carousel {
          margin-bottom: 4rem;
        }
        .carousel-caption {
          bottom: 3rem;
          z-index: 10;
        }
        .carousel-item {
          height: 32rem;
        }
        .carousel-item > img {
          position: absolute;
          top: 0;
          left: 0;
          min-width: 100%;
          height: 32rem;
        }
        .marketing .col-lg-4 {
          margin-bottom: 1.5rem;
          text-align: center;
        }
        .marketing h2 {
          font-weight: 400;
        }
        .marketing .col-lg-4 p {
          margin-right: .75rem;
          margin-left: .75rem;
        }
        .featurette-divider {
          margin: 5rem 0; 
        }
        .featurette-heading {
          font-weight: 300;
          line-height: 1;
          letter-spacing: -.05rem;
        }
        @media (min-width: 40em) {
          /* Bump up size of carousel content */
          .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
          }
          .featurette-heading {
            font-size: 50px;
          }
        }
        @media (min-width: 62em) {
          .featurette-heading {
            margin-top: 7rem;
          }
        }
    </style>

  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #ffffff;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <!-- Aqui você pode adicionar a sua imagem -->
            <img src="https://i.postimg.cc/wjQk8dwr/gsaude.png" alt="Logo" width="70" height="70" class="rounded-circle">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" style="font-weight: bold;" aria-current="page" href="#">Marcar Exame</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-weight: bold;" href="#">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="font-weight: bold;" href="#">Sobre</a>
              </li>
            </ul>
        </div>
    </div>
</nav>


</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://radiologos.co/wp-content/uploads/2019/09/bnnr-not2.jpg" class="d-block w-100" alt="Slide 1">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Agende seus exames online</h1>
            <p>Marque exames médicos facilmente através do nosso site, proporcionando comodidade e rapidez no agendamento.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Agendar</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://i.postimg.cc/yd5N11CJ/Wallpaper-Dog-20383208.jpg" class="d-block w-100" alt="Slide 2">        
        <div class="container">
          <div class="carousel-caption">
            <h1>Exames de qualidade</h1>
            <p>Oferecemos uma ampla variedade de exames médicos de alta qualidade. Cuide da sua saúde conosco!</p>
            <p><a class="btn btn-lg btn-primary" href="#">Exame</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://i.postimg.cc/s1CDWTXs/Wallpaper-Dog-20383205.jpg" class="d-block w-100" alt="Slide 3">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Sua saúde em foco</h1>
            <p>Comprometidos com o seu bem-estar, oferecemos um ambiente acolhedor para seus exames médicos.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Consulta</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- CARROSEL À CIMA
  ================================================== -->
  <!--  -->

  <div class="container marketing">

    
    <div class="row">
      <div class="col-lg-4">
        <img src="https://i.postimg.cc/kgYMFQTr/i-Stock-1134559061-0.jpg" alt="Placeholder 140x140" class="bd-placeholder-img rounded-circle" width="140" height="140">

        <h2>Dr. João Francisco Neves</h2>
        <p>Cardiologista</p>
        <p>Com vasta experiência em cuidados cardíacos, o Dr. João está comprometido em garantir a saúde do seu coração.</p>
        <p><a class="btn btn-secondary" href="#">Consultar &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <img src="https://i.postimg.cc/8Cq1x18t/R.png" alt="Placeholder 140x140" class="bd-placeholder-img rounded-circle" width="100" height="140">

        <h2>Dra. Katarina Scarlat</h2>
        <p>Dermatologista</p>
        <p>A Dra. Katarina está comprometida em cuidar da saúde da sua pele e oferecer tratamentos dermatológicos de qualidade.</p>
        <p><a class="btn btn-secondary" href="#">Consultar &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <img src="https://i.postimg.cc/7LCHB5R5/R.jpg" alt="Placeholder 140x140" class="bd-placeholder-img rounded-circle" width="130" height="140">

        <h2>Dr. Pedro Alvarez Sales</h2>
        <p>Pediatria</p>
        <p>Oferecendo cuidados especializados para os pequenos, o Dr. Pedro está aqui para garantir a saúde das crianças.</p>
        <p><a class="btn btn-secondary" href="#">Consultar &raquo;</a></p>
      </div>
    </div>


    <!-- FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Explorando o Microcosmo. <span class="text-muted">Desvendando o mundo das células.</span></h2>
        <p class="lead">Descrição do processo envolvendo o uso de microscópio para visualizar células. Algo incrível e fascinante.</p>
      </div>
      <div class="col-md-5">
        <img src="https://www.prolab.com.br/wp-content/uploads/2014/05/1-laboratorio.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Placeholder: 500x500">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Monitorando a Saúde Cardiovascular. <span class="text-muted">Aferindo a pressão arterial.</span></h2>
        <p class="lead">Descrição do processo de medição da pressão arterial e sua importância para a saúde cardiovascular.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="https://grupoh.pt/uploads/noticias/17878.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Placeholder: 500x500">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Administração de Tratamentos Intravenosos. <span class="text-muted">Aplicação de medicamentos via soro.</span></h2>
        <p class="lead">Descrição do procedimento de administração de medicamentos diretamente na corrente sanguínea através de um soro.</p>
      </div>
      <div class="col-md-5">
        <img src="https://th.bing.com/th/id/R.b83cf2f544fb7e5855424db6825ce5fd?rik=0c65oju4vKHXVg&pid=ImgRaw&r=0" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Placeholder: 500x500">

      </div>
    </div>

    <hr class="featurette-divider">

    <!--FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Voltar ao topo</a></p>
    <p>&copy; PROJETO-PHP-MVC ADS3B &middot; <a href="https://github.com/OTalDoL2/PROJETO-PHP-MVC/tree/main">Github</a> &middot;
  </footer>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
