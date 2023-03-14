<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/owl/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/galeria.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css"
    />

    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
      integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
      crossorigin=""
    />
    <script
      src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
      integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
      crossorigin=""
    ></script>

    <title>Document</title>
  </head>
  <body>

      <!--HEADER-->
      <div id="header">
        <div class="container">
          <nav
            class="navbar navbar-expand-lg navbar-light justify-content-between"
          >
            <a class="navbar-brand" href="#">
              <img
                src="./assets/logonova.png"
                width="25%"
                heigth="25%"
                class="img-fluid"
              />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="./index.php">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="passagem.php">Passagens</a>
                </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./cadastrologin/formulario.php">Cadastrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./cadastrologin/sistema.php">Perfil</a>
              </li>

              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!--//HEADER-->
  
      <!--MAIN - GALLERY-->
  
      <div class="photo-gallery">
        <div class="container">
          <div class="intro">
            <h2 class="text-center">Saiba mais sobre Taquaritinga</h2>
            <p class="text-center">Informe-se mais sobre este Destino, abaixo:</p>
          </div>
          <div class="row photos">
            <div class="col-sm-6 col-md-4 col-lg-3 item">
              <a href="./assets/galeria/taquaritinga1.jpg" data-lightbox="photos"
                ><img class="img-fluid" src="./assets/galeria/taquaritinga1.jpg"
              /></a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 item">
              <a href="./assets/galeria/taquaritinga2.jpeg" data-lightbox="photos"
                ><img class="img-fluid" src="./assets/galeria/taquaritinga2.jpeg"
              /></a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 item">
              <a href="./assets/galeria/taquaritinga3.jpg" data-lightbox="photos"
                ><img class="img-fluid" src="./assets/galeria/taquaritinga3.jpg"
              /></a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 item">
              <a href="./assets/galeria/taquaritinga4.jpg" data-lightbox="photos"
                ><img class="img-fluid" src="./assets/galeria/taquaritinga4.jpg"
              /></a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 item">
              <a href="./assets/galeria/taquaritinga5.jpg" data-lightbox="photos"
                ><img class="img-fluid" src="./assets/galeria/taquaritinga5.jpg"
              /></a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 item">
              <a href="./assets/galeria/taquaritinga6.jpg" data-lightbox="photos"
                ><img class="img-fluid" src="./assets/galeria/taquaritinga6.jpg"
              /></a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 item">
              <a href="./assets/galeria/taquaritinga7.jpeg" data-lightbox="photos"
                ><img class="img-fluid" src="./assets/galeria/taquaritinga7.jpeg"
              /></a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 item">
              <a href="./assets/galeria/taquaritinga8.jpg" data-lightbox="photos"
                ><img class="img-fluid" src="./assets/galeria/taquaritinga8.jpg"
              /></a>
            </div>
          </div>
        </div>
      </div>
    <!--//MAIN - GALLERY-->

      
    <!--MAIN - MAP-->

    <div class="intro">
      <h2 class="text-center"><b>Localize-se por Taquaritinga</b></h2>
      <p class="text-center">
        <br />
        Utilize o mapa interativo abaixo, e garante sua localização certa:
      </p>
    </div>

    <div id="map"></div>
  
    <!--//MAIN - MAP-->
    
     <!--FOOTER-->
     <footer id="contato">
      <div class="container">
        <div class="logo py-4">
          <div class="row">
            <div class="col-md-6 align-self-center text-md-left text-center">
              <img
                src="./assets/logonova.png"
                width="30%"
                heigth="30%"
                class="img-fluid"
              />
            </div>
            <div class="col-md-6 align-self-center text-right">
              <ul>
                <li>
                  <a href="#"
                    ><img
                      src="./assets/icons8-facebook-novo.svg"
                      width="30px"
                      height="30px"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img
                      src="./assets/icons8-instagram.svg"
                      width="30px"
                      height="30px"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img
                      src="./assets/icons8-twitter.svg"
                      width="30px"
                      height="30px"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img
                      src="./assets/icons8-whatsapp.svg"
                      width="30px"
                      height="30px"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img
                      src="./assets/icons8-reproduzir-youtube (1).svg"
                      width="30px"
                      height="30px"
                  /></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--//FOOTER-->

        <!--JS-->
        <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"
      ></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/isotope.pkgd.min.js"></script>
      <script src="js/magnify/jquery.magnific-popup.min.js"></script>
      <script src="js/main.js"></script>
  
      <!--GALLERY-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
  
      <!--MAP-->
      <script src="js/galeria_map.js"></script>
  
      <script       src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
      integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
      crossorigin=""></script>


  </body>
</html>
