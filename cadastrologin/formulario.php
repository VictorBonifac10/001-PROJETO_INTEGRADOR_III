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

.box{
    color: white;
    position: sticky;
    top: 95%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: rgba(0, 0, 0, 0.6);
    padding: 15px;
    border-radius: 15px;
    width: 40%;
}
fieldset{
    border: 5px solid dodgerblue;
    padding: 10px;
    border-radius: 8px;
}
legend{
    border: 1px solid dodgerblue;
    padding: 10px;
    margin-bottom: 10px;
    text-align: center;
    background-color: dodgerblue;
    border-radius: 8px;
}
.inputBox{
    position: relative;
}
.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}
.labelInput{
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .5s;
}
.inputUser:focus ~ .labelInput,
.inputUser:valid ~ .labelInput{
    top: -20px;
    font-size: 12px;
    color: dodgerblue;
}
#data_nascimento{
    border: none;
    padding: 8px;
    border-radius: 10px;
    outline: none;
    font-size: 15px;
}
#submit{
    background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}
#submit:hover{
    background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
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

     <?php

if(isset($_POST['submit'])){
//    print_r('Nome: ' . $_POST['nome']);
//    echo '<br>';
//    print_r('Email: ' . $_POST['email']);
//    echo '<br>';
//   print_r('Telefone: ' . $_POST['telefone']);
//    echo '<br>';
//    print_r('Cidade: ' . $_POST['cidade']);
//    echo '<br>';
//    print_r('Estado: ' . $_POST['estado']);
//    echo '<br>';
//    print_r('Endereço: ' . $_POST['endereco']);
//   echo '<br>';

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];
    $imagem = $_POST['imagem'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,cidade,estado,endereco,senha,imagem)
    VALUES('$nome','$email','$telefone','$cidade','$estado','$endereco','$senha', '$imagem')");

    header('Location: login.php');  
}

      if(isset($_FILES["imagem"]) && !empty($_FILES["imagem"]))
      {
          move_uploaded_file($_FILES["imagem"]["tmp_name"], "./img/".$_FILES["imagem"]["name"]);
          echo "update realizado com sucesso";
      }

?>
    <!--//MAIN - FORMS -->
    
<div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Torne-se um Usuário</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                <br><br>
                </div>
                <br><br>
                  <!--<form action="./formulario.php" method="post" enctype="multipart/form-data">
                    <label> Selecione a imagem </label>
                    <input type="file" name="imagem" accept="image/*" class="form-control" />
                  </form>-->
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
            <br>
            <a href="login.php">Já tenho uma Conta. Login</a>
        </form>
    </div>
 
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


