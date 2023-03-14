<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap"
      rel="stylesheet"
    />
   

    <link rel="stylesheet" href="../css/owl/owl.carousel.min.css" />
    <link rel="stylesheet" href="../css/owl/owl.theme.default.min.css" />
    <link rel="stylesheet" href="../css/magnific-popup.css" />
    <link rel="stylesheet" href="../csscopy/main.css" />

    <title>Hora Ônibus Matão</title>

    <style>
        .login{
            color: white;
            position: sticky;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 40%;
        }
        input{
            width: 100%;
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .InputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .InputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;

        }
        
        #contato{
            padding-bottom: 35%;
        }

    </style>

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
              src="../assets/logonova.png"
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
                <a class="nav-link active" href="../index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../passagem.php">Passagens</a>
              </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="formulario.php">Cadastrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sistema.php">Perfil</a>
              </li>

            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!--//HEADER-->

    <!--MAIN - FORMS -->

    <div class="login">
        <h1>Login</h1>
        <form action="testlogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="InputSubmit" type="submit" name="submit" value="Enviar">
            <br><br>
            <a href="formulario.php">Não tenho uma Conta. Cadastre-se</a>
        </form>
    </div>

    <!--MAIN - FORMS -->

    <!--FOOTER-->
    <footer id="contato">
      <div class="container">
        <div class="logo py-4">
          <div class="row">
            <div class="col-md-6 align-self-center text-md-left text-center">
              <img
                src="../assets/logonova.png"
                width="25%"
                height="25%"
                class="img-fluid"
              />
            </div>
            <div class="col-md-6 align-self-center text-right">
              <ul>
                <li>
                  <a href="#"><img src="../assets/icons8-facebook-novo.svg" /></a>
                </li>
                <li>
                  <a href="#"><img src="../assets/icons8-instagram.svg" /></a>
                </li>
                <li>
                  <a href="#"><img src="../assets/icons8-twitter.svg" /></a>
                </li>
                <li>
                  <a href="#"
                    ><img src="../assets/icons8-reproduzir-youtube (1).svg"
                  /></a>
                </li>
                <li>
                  <a href="#"><img src="../assets/icons8-whatsapp.svg" /></a>
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
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/isotope.pkgd.min.js"></script>
    <script src="../js/magnify/jquery.magnific-popup.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/formulario.js"></script>
  </body>

</html>


