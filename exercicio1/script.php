<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $Nome = $_POST['Nome'];
        $Email = $_POST['Email'];
        $Idade = $_POST['Idade'];
        $UF = $_POST['UF'];
        $Senha = $_POST['Senha'];
        $Sexo = $_POST['Sexo'];
        $Mensagem = $_POST['Mensagem'];
        
        echo "<h2>Informações Digitadas:</h2>";
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
                echo "<p><strong>Você não escolheu nenhum interesse!</strong><br></p>";
            }
        echo "<strong>Sua mensagem: </strong>" . $Mensagem;
    ?>
</body>
</html>