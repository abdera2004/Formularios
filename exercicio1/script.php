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
    <div id="principal" class="p-3 position-absolute top-0 start-50 translate-middle-x border border-2 border-black">
        <?php
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $idade = $_POST['idade'];
            $uf = $_POST['uf'];
            $senha = $_POST['senha'];
            $sexo = $_POST['sexo'];
            $mensagem = $_POST['mensagem'];
            
            echo "<h2>Informações Digitadas</h2>";
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Idade:</strong> $idade</p>";
            echo "<p><strong>UF:</strong> $uf</p>";
            echo "<p><strong>Senha:</strong> $senha</p>";
            echo "<p><strong>Sexo:</strong> $sexo</p>";
            if(isset($_POST["interesses"]))
                {
                    echo "<strong>Os seus interesses são:</strong><BR>";

                    foreach($_POST["interesses"] as $interesses)
                    {
                        echo "- " . $interesses . "<BR>";
                    }
                }
                else
                {
                    echo "<p><strong>Você não escolheu nenhum interesse!</strong></p>";
                }
            echo "<strong>Sua mensagem: </strong>" . $mensagem;

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

body{
    background-color: #659DBD;
}
#principal{
    margin-top: 2cm;
    background-color: rgb(49, 23, 2);
    color: white;
}

</style>

</html>