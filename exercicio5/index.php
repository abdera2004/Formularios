<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../exercicio5/style.css">
    <title>Formulário</title>
</head>
<body>

<?php

include('./../componentes/cabecalho.php');

?>

    <div id="principiodavida" >

        <div id="preensado" class="d-flex position-absolute top-50 start-50 translate-middle border border-4 border border-black p-4 justify-content-center rounded">

            <form action="script.php" method="post">
                
                <center><h1>Medidas</h1></center>
                <hr class="opacity-100"> 
                <b>Peso (kg):</b><br>
                <input type="number" step="0.01" name="peso" class="border-black border-2 rounded"><br>
                <b>Altura (m):</b><br>
                <input type="number" step="0.01" name="altura" class="border-black border-2 rounded"><br>
                <br>
                <input id="botao" type="submit" name="Cadastrar" class="border-black border-1 rounded property-bottom col-12">
           
            </form>

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
body{ 
    background-color: #659DBD;
}
#preensado{
    background-color: rgb(9, 163, 60);
}
hr{
    border-color: rgb(0, 0, 0);
}
.l{
    margin-bottom: 0.5cm;
}
b{
    font-family: Arial;
}
#botao{
    background-color: rgb(24, 77, 223);
    color: white;
}
</style>

</html>
