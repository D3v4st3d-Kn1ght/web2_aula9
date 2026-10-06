<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "site";
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

        $nome= $_POST['nome'];
        $email= $_POST['email'];
        $password= $_POST['password'];
        $comando = "INSERT INTO `usuarios` (`id`, `nome`, `e-mail`, `senha`) VALUES (NULL, '$nome', '$email', '$password')";

        $linhas = $conexao->exec($comando);

        if($linhas > 0)
            echo "Dados Salvos com Sucesso!";
        else
            echo "Erro ao Salvar Dados!";

        $conexao = null;
    ?>
</body>
</html>