<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../exercicio5/style.css">
    <title>Document</title>
</head>
<body>
    
    <div id="principiodavida">
        <div class="position-absolute justify-content-center start-50 top-50 translate-middle d-flex">
        <?php
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $imc = $peso / ($altura ** 2);

        if($imc< 16.9){
            echo "TU VAI MORRE LEK MT MAGRO FILHO";
            exit;
        }
        elseif($imc >= 17 && $imc <= 18.4){
            echo "temq dar uma engordadinha em amigao";
            exit;
        }
        elseif($imc >= 18.5 && $imc <=24.9){
            echo "ta bem po, nem engorda nem emagrece q ta mec";
            exit;
        }
        elseif($imc >= 25 && $imc <= 29.9){
            echo "ta meio gordinho em mas ta mec";
            exit;
        }
        elseif($imc >= 30 && $imc <= 34.9){
            echo "ta gordao em vamo querer emagrecer";
            exit;
        }
        elseif($imc >= 35 && $imc <= 40){
            echo "o amigao tu vai morrer se continuar assim";
            exit;
        }
        else{
            echo "AMIGAO AQUI NÃO É LUGAR PRA FAZER COSPLAY DE TAIS CARLA NAO PARA AE";
            exit;
        }
        ?>
        <?php
        if($imc< 16.9) {
            
                
        ?>
        
        <?php
        echo "<B>TU VAI MORRE LEK MT MAGRO FILHO</B>";
        
        ?>
        
        <?php
        }else if ($imc >= 17 && $imc <= 18.4) { 
            echo "<B>temq dar uma engordadinha em amigao</B>";
        
        ?>
        <?php
        }else if ($imc >= 25 && $imc <= 29.9) { 
            echo "<B>ta meio gordinho em mas ta mec</B>";
        
        ?>
        <?php
        }else if ($imc >= 30 && $imc <= 34.9) { 
            echo "<B>ta gordao em vamo querer emagrecer</B>";
        
        ?>
        <?php
        }else if ($imc >= 35 && $imc <= 40) { 
            echo "<B>o amigao tu vai morrer se continuar assim</B>";
        
        ?>

        <?php
        }else {
            echo "<B>AMIGAO AQUI NÃO É LUGAR PRA FAZER COSPLAY DE TAIS CARLA NAO PARA AE</B>";
        }
        ?>
        <img src="<?php echo "../imagens/taiscarla.png" ?>" alt="Minha Imagem" style="height: 100px;" class="position-absolute top-100 start-50 translate-middle-x">
    </div>
         
        
            
    </div>

    

</body>
</html>