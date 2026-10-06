<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();

        if(!isset($_SESSION['nome']))
        {
            echo "O login não foi efetuado! Volte para a <a href='exercicio2.php'>página de login</a> para continuar!";
        }
        else
        {
            echo "Usuário ".  $_SESSION['nome'] . " está logado!";
        }
    ?>
</body>
</html>