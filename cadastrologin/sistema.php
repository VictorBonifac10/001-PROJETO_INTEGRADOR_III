<?php
session_start();
include_once('config.php');
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}

    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM usuarios WHERE email = '$logado' ORDER BY id DESC";

    $result = $conexao->query($sql);

 //   print_r($result);
?>

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
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/perfil.css" />

    <title>Hora Ônibus Matão</title>

    <style>
      .table-bg{
        background: rgba(0,0,0,0.7);
        border-radius: 8px;
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
              <a class="nav-link" href="../formulario.php">Cadastrar</a>
            </li>
            </ul>
            <div class="d-flex">
        <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
          </div>
        </nav>
      </div>
    </div>
    <!--//HEADER-->

    <!-- PERFIL DO USUÁRIO -->

  <section class="user-profile">
    <div class="header">
      <div class="cover">
        <div class="perfil-usuario-avatar">
         <img src="http://www.coopernortetelecom.com.br/assets/images/author-1.png" alt="img-avatar">
        </div>
      </div>
    </div>
  </div>
    <div class="user-profile-body">
      <div class="user-profile-bio">
        <h3 class="titulo">   <center> <?php  echo "<h1>Bem vindo <h1>$logado</h1><h1>"?> </center> </h3> 
    </div>
    <!-- (TABLE) PERFIL DO USUÁRIO -->
    <diV>
      <table class="table text-white table-bg">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Endereço</th>
                <th scope="col">Senha</th>
                <th scope="col">Perfil</th>
                <th scope="col">...</th>
            </tr>
            </thead>
            <tbody>            

              <?php
              
              while($user_data = mysqli_fetch_assoc($result))
              {
                echo "<tr>";
                echo "<td>".$user_data['id']."</td>";
                echo "<td>".$user_data['nome']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td>".$user_data['telefone']."</td>";
                echo "<td>".$user_data['cidade']."</td>";
                echo "<td>".$user_data['estado']."</td>";
                echo "<td>".$user_data['endereco']."</td>";
                echo "<td>".$user_data['senha']."</td>";
                echo "<td>".$user_data['imagem']."</td>";
                echo "<td>
                  <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                      <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                      <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                    </svg>
                  </a>
                  <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                      <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                    </svg>                
                  </a>
                </td>";
                echo "</tr>";
              
              }

              ?>
            </tbody>
            </table><br><br><br><br><br><br><br>
    </div><br><br><br><br><br><br><br><br>
    <!-- /(TABLE)PERFIL DO USUÁRIO

	<div class="user-profile-body">
		<div class="user-profile-bio">
      <br><br><br><br><br><br>
		  <h3 class="titulo">Favoritos:
			<img src="../assets/coracao.png" width="20px" height="20px">
		  </h3>
		</div>
  </section>
   //PERFIL DO USUÁRIO -->
  

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
                  <a href="#"
                    ><img
                      src="../assets/icons8-facebook-novo.svg"
                      width="30px"
                      height="30px"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img
                      src="../assets/icons8-instagram.svg"
                      width="30px"
                      height="30px"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img
                      src="../assets/icons8-twitter.svg"
                      width="30px"
                      height="30px"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img
                      src="../assets/icons8-reproduzir-youtube (1).svg"
                      width="30px"
                      height="30px"
                  /></a>
                </li>
                <li>
                  <a href="#"
                    ><img
                      src="../assets/icons8-whatsapp.svg"
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
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/isotope.pkgd.min.js"></script>
    <script src="../js/magnify/jquery.magnific-popup.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>
