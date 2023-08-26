<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../exercicio3/style.css">
    <title>Document</title>
</head>
<body>

    <?php
       $n = $_POST['numero'];
       

       for( $i = 1;$i <= 10; $i++){
        echo $n*2;
        
        
       }

       
    ?>
</body>
</html>