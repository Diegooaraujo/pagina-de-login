<?php 

    if(isset($_POST['submit'])){
        include_once("Usuarios.php");
        $nome =($_POST['nome']);
        $email = ($_POST['email']);
        $senha = ($_POST['senha']);
        
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cadastrar.css">
</head>
<body>
    <div>
        <form action="" method="POST">
            <h1>Cadastrar</h1>
            <label for="nome">Nome:</label>
            <input type="text" placeholder="nome" name="nome" id="nome">
            <label for="email">E-mail:</label>
            <input type="email" placeholder="E-mail" name="email" id="email">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="senha">
            <label for="confSenha">Confirmar Senha:</label>
            <input type="password" placeholder="Confirmar senha" name="confSenha" id="confSenha">
            <input type="submit" value="Enviar" id="button" name="submit">
            <a href="index.html">Login</a>
        </form>
    </div>
</body>
</html>