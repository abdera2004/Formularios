<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Triangulo</title>
</head>
<body class="">
    <div class="position-absolute justify-content-center start-50 top-50 translate-middle d-flex">
        <?php
        $lado1 = $_POST['medida1'];
        $lado2 = $_POST['medida2'];
        $lado3 = $_POST['medida3'];

        if($lado1>$lado2+$lado3){
            echo "Triângulo inválido";
            exit;
        }
        elseif($lado2>$lado1+$lado3){
            echo "Triângulo inválido";
            exit;
        }
        elseif($lado3>$lado1+$lado2){
            echo "Triângulo inválido";
            exit;
        }
        ?>
        <?php
        if($lado1==$lado2 && $lado2==$lado3) {
            
                
        ?>
        
        <?php
        echo "<B>Triângulo equilátero</B>";
        
        ?>
        <img src="<?php echo "../imagens/triangulo-equilatero-8.png" ?>" alt="Minha Imagem" style="height: 100px;" class="position-absolute top-100 start-50 translate-middle-x">
        
        <?php
        }else if ($lado1!=$lado2 && $lado2!=$lado3) { 
            echo "<B>Triângulo escaleno</B>";
        
        ?>
        <img src="<?php echo "../imagens/triangulo-escaleno.png" ?>" alt="Minha Imagem" style="height: 100px;" class="position-absolute top-100 start-50 translate-middle-x">

        <?php
        }else {
            echo "<B>Triângulo isósceles</B>";
        }
        ?>
        <img src="<?php echo "../imagens/triangulo-isosceles.png" ?>" alt="Minha Imagem" style="height: 100px;" class="position-absolute top-100 start-50 translate-middle-x">
    </div>

<style>
    body{
        background-color: #659DBD;
    }
    
</style>

</body>
</html>