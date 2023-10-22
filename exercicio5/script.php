<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>IMC</title>
</head>

<body>

<?php

include('./../componentes/cabecalho.php');

?>

<div id="principiodavida">
    <div class="d-flex position-absolute justify-content-center start-50 top-50 translate-middle">
        <?php
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $imc = $peso / ($altura ** 2);

        if($imc< 16.9){
            echo "<b>TU VAI MORRE LEK MT MAGRO FILHO</b>";
             
        }elseif($imc >= 17 && $imc <= 18.4){
            echo "<b>temq dar uma engordadinha em amigao</b>";
        
        }elseif($imc >= 18.5 && $imc <=24.9){
            echo "<b>ta bem po, nem engorda nem emagrece q ta mec</b>";
            
        }elseif($imc >= 25 && $imc <= 29.9){
            echo "ta meio gordinho em mas ta mec";

        }elseif($imc >= 30 && $imc <= 34.9){
            echo "<b>ta gordao em vamo querer emagrecer</b>";

        }elseif($imc >= 35 && $imc <= 40){
            echo "<b>o amigao tu vai morrer se continuar assim</b>";

        ?>
        <?php
        }else{  
        ?>

        <?php
         
            echo "<B>AMIGAO AQUI NÃO É LUGAR PRA FAZER COSPLAY DE TAIS CARLA NAO PARA AE</B>";    
        
        ?>
        <img src="<?php echo "../imagens/taiscarla.png" ?>" alt="Minha Imagem" style="height: 150px;" class="position-absolute top-100 start-50 translate-middle-x">
        <?php
        }
        ?>
    </div> 
    
</div>

<?php

include('./../componentes/rodape.php');

?>

</body>

<style>
body{
    background-color: #659DBD;
}
#principiodavida{
    height: 100vh;
}
</style>

</html>