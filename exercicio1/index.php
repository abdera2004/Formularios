<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Formulário</title>
</head>
<body>

        <?php

            include('./../componentes/cabecalho.php');

        ?>

<div id="principiodavida">

    <div id="preensado"class="d-flex position-absolute top-50 start-50 translate-middle border border-4 border border-black p-4 justify-content-center rounded">
         
        <form action="script.php" method="post">
                <center><h1>Cadastro</h1></center>
                <hr class="opacity-100"> 
                <b>Nome:</b><br>
                <input type="text" name="nome" class="border-black border-2 rounded"><br>
                <b>Email:</b><br>
                <input type="email" name="email" class="border-black border-2 rounded"><br>
                <b>Idade:</b><br>
                <input type="number" name="idade" class="border-black border-2 rounded"><br>
                <b>Senha:</b><br>
                <input type="password" name="senha" class="border-black border-2 rounded"><br>
                <b>Sexo:</b><br>
                <input type="radio" name="sexo" value="masculino"> Masculino<br>
                <input type="radio" name="sexo" value="feminino"> Feminino<br>
                <b>Interesses:</b><br>
                <input type="checkbox" name="interesses[]" value="Futebol">Futebol<br>
                <input type="checkbox" name="interesses[]" value="Cursos">Cursos<br>
                <input type="checkbox" name="interesses[]" value="Moda">Moda<br>
                <b>Unidade federativa:</b><br>
                <select name="uf" class="border-black border-2 rounded">
                    <option></option>
                    <option>AC</option>
                    <option>AL</option>
                    <option>AP</option>
                    <option>AM</option>
                    <option>BA</option>
                    <option>CE</option>
                    <option>DF</option>
                    <option>ES</option>
                    <option>GO</option>
                    <option>MA</option>
                    <option>MT</option>
                    <option>MS</option>
                    <option>MG</option>
                    <option>PA</option>
                    <option>PB</option>
                    <option>PR</option>
                    <option>PE</option>
                    <option>PI</option>
                    <option>RJ</option>
                    <option>RN</option>
                    <option>RS</option>
                    <option>RO</option>
                    <option>RR</option>
                    <option>SC</option>
                    <option>SP</option>
                    <option>SE</option>
                    <option>TO</option>
                </select><br>
                <b>Observações:</b><br>
                <textarea class="border-black border-2 rounded" style="width: 200px" name="mensagem"></textarea><br>

                <input id="botao" type="submit" name="cadastrar" class="border-black border-1 rounded property-bottom col-12">
            </form>
    </div>
</div>


<?php

include('./../componentes/rodape.php');

?>

</body>
<style>   

    body{
        background-image: url("../imagens/fundo3d.png");
        background-repeat: no-repeat;
        background-size: cover;
    }
    #principiodavida{
        height: 100vh;
    }

    #preensado{
        background-color: #4e4a4a; 
        color: white;
        margin-top: 3cm;
    }
    #botao{
        color: white;
        background-color: rgb(5, 74, 131);
    }
    h1{
        color: rgb(255, 255, 255);
    }
</style>
</html>
