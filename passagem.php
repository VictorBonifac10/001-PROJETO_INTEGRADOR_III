<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/config.css" />

    <link rel="stylesheet" href="css/passagem.css" />


    <title>Marketing Website</title>
  </head>
  <body>
    <!--HEADER-->
    <div id="header">
      <div class="container fixed-top">
        <nav
          class="navbar navbar-expand-lg navbar-light justify-content-between"
        >
          <a class="navbar-brand" href="#">
            <img
              src="./assets/logonova.png"
              width="25%"
              height="25%"
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
                <a class="nav-link active" href="index.php">Inicio</a>
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
    <br>
    <br>
    <br>
    
    
    <!--MAIN - PASSAGEM-->

<section>
    <div class="container">
      <h1 style="margin-top: 5%; margin-bottom: 7%;">PLANO DE HORÁRIOS</h1>

      <div style="display: flex; justify-content: flex-start; margin-bottom: 2.5%;">
          <h6 class="fs-4">ESCOLHA SEU DESTINO, O MELHOR PREÇO, HORÁRIO <br> E SUA EMPRESA FAVORITA PARA VIAJAR COM DESEJAR</h6>
      </div>

      <!-- <div style="display: flex; justify-content: flex-end;">
          <form class="d-flex" role="search">
              <input class="form-control rounded-pill" style="width: 400px; margin-bottom: 5%;" type="search" placeholder="Pesquise seu Destino" aria-label="Search">
          </form>
      </div> -->

      <div style="display: flex;">
          <div class="d-flex flex-column flex-shrink-0 bg-light" style="width: 4.5rem; height: 510px;">
              <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                  <li class="nav-item">
                      <a href="passagem.php?dia=seg" class="nav-link py-3 border-bottom rounded-4 text-secondary" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Casa" data-bs-original-title="Home">
                          <p>Seg</p>
                      </a>
                  </li>
                  <li>
                      <a href="passagem.php?dia=ter" class="nav-link py-3 border-bottom rounded-4 text-secondary list-group-item list-group-item-action" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Painel" data-bs-original-title="Dashboard">
                          <p class="list-group-item-action">Ter</p>
                      </a>
                  </li>
                  <li>
                      <a href="passagem.php?dia=qua" class="nav-link py-3 border-bottom rounded-4 text-secondary list-group-item list-group-item-action" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Pedidos" data-bs-original-title="Orders">
                          <p>Qua</p>
                      </a>
                  </li>
                  <li>
                      <a href="passagem.php?dia=qui" class="nav-link py-3 border-bottom rounded-4 text-secondary list-group-item list-group-item-action" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Produtos" data-bs-original-title="Products">
                          <p>Qui</p>
                      </a>
                  </li>
                  <li>
                      <a href="passagem.php?dia=sex" class="nav-link py-3 border-bottom rounded-4 text-secondary list-group-item list-group-item-action" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Clientes" data-bs-original-title="Customers">
                          <p>Sex</p>
                      </a>
                  </li>
                  <li>
                      <a href="passagem.php?dia=sab" class="nav-link py-3 border-bottom rounded-4 text-secondary list-group-item list-group-item-action" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Clientes" data-bs-original-title="Customers">
                          <p>Sáb</p>
                      </a>
                  </li>
                  <li>
                      <a href="passagem.php?dia=dom" class="nav-link py-3 border-bottom rounded-4 text-secondary" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Clientes" data-bs-original-title="Customers">
                          <p>Dom</p>
                      </a>
                  </li>
              </ul>
          </div>


          <table class="table ms-2 bg-light align-end" style="height: 650px; margin-bottom: 10%;">
              <thead>
                  <tr>
                      <th class="text-center fs-5" scope="col">Dias</th>
                      <th class="text-center fs-5" scope="col">EMPRESAS</th>
                      <th class="text-center fs-5" scope="col">SAÍDA DE ORIGEM</th>
                      <th class="text-center fs-5" scope="col">DESTINO</th>
                      <th class="text-center fs-5" scope="col">HORÁRIO DE SAÍDA</th>
                      <th class="text-center fs-5" scope="col">VALOR</th>
                      <th class="text-center fs-5" scope="col"></th>
                  </tr>
              </thead>
    <?php
    
        include('./cadastrologin/config.php');

        if( isset($_GET["dia"]) && !empty($_GET["dia"]) ){

            $consulta = "SELECT * FROM tabela_horario where dias = '".$_GET["dia"]."'";
            
        }
        else
        {
            $consulta = "SELECT * FROM tabela_horario";
        }
        $resultado = mysqli_query($conexao,$consulta);

        while ($dado = mysqli_fetch_array($resultado)) 
{
    ?>
                 
                      
                  <tr>
                      <td class="text-center fs-5"><?php echo $dado["dias"]; ?></td>
                      <td class="text-center fs-5"><?php echo $dado["empresas"]; ?></td>
                      <td class="text-center fs-5"><?php echo $dado["saida"]; ?></td>
                      <td class="text-center fs-5"><a href="./galeria.php"><b><?php echo $dado["destino"]; ?></b></a></td>
                      <td class="text-center fs-5"><?php echo $dado["horario"]; ?></td>
                      <td class="text-center fs-5">R$<?php echo $dado["valor"]; ?>,00</td>
                  </tr>
                 
            <?php } ?>  


          </table>
      </div>
    </section>
    
    <!--//MAIN - PASSAGEM-->

    <!--FOOTER-->
    <footer id="contato">
      <div class="container">
        <div class="logo py-4">
          <div class="row">
            <div class="col-md-6 align-self-center text-md-left text-center">
              <img
                src="./assets/logonova.png"
                width="35%"
                height="55%"
                class="img-fluid text-center text-md-left"
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
  </body>
</html>
