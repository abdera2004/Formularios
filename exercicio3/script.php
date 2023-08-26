<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $peso = $_POST['peso'];
       $altura = $_POST['altura'];
       $imc = [$peso/($altura*2)];

       if($imc<16.9) {
        echo 'TU VAI MORRE FI';
       } else if($imc >= 17 && <= 18.4){
        echo 'temq dar uma engordadinha em amigo';
       } else if($imc >=18.5 && <=24.9){
        echo 'ta bem po, nem engorda nem emagrece q ta mec';
       } else if($imc >=25 && <=29.9){
        echo 'ta meio gordinho em mas ta mec';
       } else if($imc >=30 && <=34.9){
        echo 'ta gordao em vamo querer emagrecer';
       } else if($imc >=35 && <=40){
        echo 'o amigao tu vai morrer se continuar assim';
       } else{
        echo 'AMIGAO AQUI NÃO É LUGAR PRA FAZER COSPLAY DE TAIS CARLA NAO PARA AE';
       }
    ?>
</body>
</html>