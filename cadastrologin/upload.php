<?php

include_once('config.php');


if(isset($_FILES["imagem"]) && !empty($_FILES["imagem"]))
{
    move_uploaded_file($_FILES["imagem"]["tmp_name"], "./img/".$_FILES["imagem"]["name"]);
    echo "update realizado com sucesso";
}

?>

<img src="./img/Planet9_Wallpaper_5000x2813.jpg"/>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <label> Selecione a imagem </label>
            <input type="file" name="imagem" accept="image/*" class="form-control" />
            <button type="submit" class="btn btn-sucess">
                Enviar imagem
            </button>
        </form>

</body>
</html>



