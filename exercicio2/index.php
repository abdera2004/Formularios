<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../exercicio2/style.css">
    <title>Formulário</title>
</head>
<body>

<?php

include('./../componentes/cabecalho.php');

?>

    <div id="principiodavida">

        <div id="preensado"class="d-flex position-absolute top-50 start-50 translate-middle border border-4 border border-black p-4 justify-content-center rounded">

            <form action="script.php" method="post">
                
                <center><h1>Tabuada</h1></center>
                <hr class="opacity-100">
                <b>Numero:</b><br>
                <input type="number"  name="numero" class="border-black border-2 rounded"><br><br>
                
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
    #preensado{
        background-color: #df2424; 
        color: white;
    }
    #botao{
        color: white;
        background-color: rgb(50, 148, 228);
    }
    h1{
        color: rgb(255, 255, 255);
    }
    body{
        background-color: #659DBD;
    }
</style>   
</html>
