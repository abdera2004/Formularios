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
       $altura = $_POST['altura']
       $imc = $_POST[$peso/($altura*2)];

       if($imc<16.9) {
        echo 'TU VAI MORRE FI'
       } else if($imc >= 17 && <= 18.4){
        echo 'temq dar uma engordadinha em amigo'
       } else if($imc >=18.5 && <=24.9){
        echo 'ta bem po, nem engorda nem emagrece q ta mec'
       } else if($imc >=25 && <=29.9){
        echo 'ta meio gordinho em mas ta mec'
       } else if($imc >=30 && <=34.9){
        echo 'ta gordao em vamo querer emagrecer'
       } else if($imc >=35 && <=40){
        echo 'o amigao tu vai morrer se continuar assim'
       } else{
        echo 'AMIGAO AQUI NÃO É LUGAR PRA FAZER COSPLAY DE TAIS CARLA NAO PARA AE'
       }
    ?>
</body>
</html>

<?php
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        
        $imc = $peso / ($altura ** 2);
        
        $dicionario = [
            18.5 => "Abaixo do peso",
            24.9 => "Peso normal",
            29.9 => "Sobrepeso",
            34.9 => "Obesidade grau 1",
            39.9 => "Obesidade grau 2",
            40.0 => "Obesidade grau 3"
        ];
        
        foreach($dicionario as $key => $value){
            //Se a chave for menor que 40, então testa os valores de acordo com o IMC. 
            if($key < 40.0){
                if($imc <= $key){
                    echo PHP_EOL."$value";
                    break;
                }
            }else{ //Se a chave for maior ou igual a 40
                echo PHP_EOL."$value";
            }
        }
    ?>