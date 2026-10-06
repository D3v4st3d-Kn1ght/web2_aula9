<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #painel {
            border: 1px solid #ccc;     
            border-radius: 8px;          
            padding: 20px;               
            background-color: #f9f9f9;   
            max-width: 300px;            
            margin-bottom: 15px;         
            font-family: Arial, sans-serif;
        }
        #painel label {
            display: inline-block;
            width: 60px;
            margin-bottom: 10px;
        }
        #painel input {
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <form action="ex1.php" method="POST">
        <div id="painel">
            <label for="">Nome:</label>
            <input type="text" name="nome"><br>
            
            <label for="">E-mail:</label>
            <input type="text" name="email"><br>
            
            <label for="">Senha:</label>
            <input type="password" name="password"><br>
        </div>
        <input type="submit" value="Salvar" style="width:120px; height:30px;">
    </form>
</body>
</html>