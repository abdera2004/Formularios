<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Triangulo</title>
</head>
<body class="position-absolute justify-content-center start-50 top-50 translate-middle d-flex">
    <?php
    $lado1 = $_POST['medida1'];
    $lado2 = $_POST['medida2'];
    $lado3 = $_POST['medida3'];

    if($lado1>$lado2+$lado3){
        echo "Triângulo inválido";
    }
    elseif($lado2>$lado1+$lado3){
        echo "Triângulo inválido";
    }
    elseif($lado3>$lado1+$lado2){
        echo "Triângulo inválido";
    }

    if($lado1==$lado2 && $lado2==$lado3) {
        echo "Triângulo equilátero";
    } 
    else if ($lado1!=$lado2 && $lado2!=$lado3) { 
        echo "Triângulo escaleno";
    } 
    else {
        echo "Triângulo isósceles";
    }
    ?>
</body>
</html>