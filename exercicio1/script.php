<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div id="principal" class="p-3 position-absolute top-0 start-50 translate-middle-x border border-2 border-black">
    <?php
        $Nome = $_POST['Nome'];
        $Email = $_POST['Email'];
        $Idade = $_POST['Idade'];
        $UF = $_POST['UF'];
        $Senha = $_POST['Senha'];
        $Sexo = $_POST['Sexo'];
        $Mensagem = $_POST['Mensagem'];
        
        echo "<h2>Informações Digitadas</h2>";
        echo "<p><strong>Nome:</strong> $Nome</p>";
        echo "<p><strong>Email:</strong> $Email</p>";
        echo "<p><strong>Idade:</strong> $Idade</p>";
        echo "<p><strong>UF:</strong> $UF</p>";
        echo "<p><strong>Senha:</strong> $Senha</p>";
        echo "<p><strong>Sexo:</strong> $Sexo</p>";
        if(isset($_POST["Interesses"]))
            {
                echo "<strong>Os seus interesses são:</strong><BR>";

                foreach($_POST["Interesses"] as $Interesses)
                {
                    echo "- " . $Interesses . "<BR>";
                }
            }
            else
            {
                echo "<p><strong>Você não escolheu nenhum interesse!</strong></p>";
            }
        echo "<strong>Sua mensagem: </strong>" . $Mensagem;
    ?>
</div>

<style>

body{
    background-color: rgb(56, 55, 55);
}
#principal{
        height: 100vh;
        background-color: rgb(49, 23, 2);
        color: white;

}

</style>

</body>
</html>