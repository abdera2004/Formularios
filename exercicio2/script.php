<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../exercicio4/style.css">
    <title>Document</title>
</head>
<body>

    <?php
        $n = $_POST['numero'];
        $i = 1;
        while ($i <= 10) {
            $resultado = $n * $i;
            echo "<tr>a$resultado a</tr>" ,'<br>';
            $i++;  
        } 

    ?>

</body>
</html>