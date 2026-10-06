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

        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "site";
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

        $comando = "SELECT `nome`, `e-mail` FROM `usuarios`";

        $stm = $conexao->prepare($comando);
        $stm->execute();

        $nome = $_POST['nome'];
        $email = $_POST['email'];

        while($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {
            if($resultado['nome'] == $nome && $resultado['e-mail'] == $email)
            {
                $_SESSION['nome'] = $_POST['nome'];
                echo "Usuário Logado! <a href='exercicio3.php'>Ir para exercício 3 professor?</a>";
                $conexao = null;
                break;
            }
        }
        if($conexao != null)
        {
            echo "Usuário Inexistente! Cheque o nome ou email.";
        }
    ?>
</body>
</html>