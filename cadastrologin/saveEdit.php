<?php

     // isset -> serve para saber se uma variável está definida
     include_once('config.php');
     
     if(isset($_POST['update']))
     {
         $id = $_POST['id'];
         $nome = $_POST['nome'];
         $email = $_POST['email'];
         $telefone = $_POST['telefone'];
         $cidade = $_POST['cidade'];
         $estado = $_POST['estado'];
         $endereco = $_POST['endereco'];
         $senha = $_POST['senha'];
         $imagem = $_POST['imagem'];
         
         $sqlUpdate = "UPDATE usuarios SET nome='$nome',email='$email',telefone='$telefone',cidade='$cidade',estado='$estado',endereco='$endereco',senha='$senha',imagem='$imagem'
         WHERE id='$id'";

         $result = $conexao->query($sqlUpdate);

         print_r($result);
     }
     header('Location: sistema.php');

?>