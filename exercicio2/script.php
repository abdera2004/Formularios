<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php

include('./../componentes/cabecalho.php');

?>
<div id="principiodavida">
    <div id="principal" class="translate-middle start-50 top-50 justify-content-center position-absolute border border-1 p-3 border border-black rounded">
        <center><h5>Tabuada</h5></center>
        <hr class="opacity-100"> 
    <?php
        $n = $_POST['numero'];
        $i = 1;
        while ($i <= 10) {
            $resultado = $n * $i;
            echo "<tr>$n X $i = $resultado</tr>" ,'<br>';
            $i++;  
        } 

    ?>
    </div>
</div>
<?php

include('./../componentes/rodape.php');

?>

</body>

<style>
#principiodavida{
        height: 100vh;
    }
    #principal {
        background-color: black;
        color: white;
    }
    body{
        background-color: #659DBD;
    }
</style>

</html>