<?php 
    include_once("Usuarios.php");
    $con = new Usuarios;
    if(isset($_POST['submit'])){
        

        $nome =addslashes($_POST['nome']);
        $email =addslashes ($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confSenha = addslashes($_POST['confiSenha']);
        $con->conectar();
        if($senha == $confSenha){
            if($con->cadastrar($nome,$email,$senha)){
                echo"cadastrado com sucesso";
            }else{
                echo"email ja cadastrado!";
            }
           
        }else{
            echo"Senha e confirmar Senha não correspondem!";
        }
        

        //verificar se está vazio
        // if(!empty($nome))

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
            <input type="password" placeholder="Confirmar senha" name="confiSenha" id="confSenha">
            <input type="submit" value="Enviar" id="button" name="submit">
            <a href="index.html">Login</a>
        </form>
    </div>
</body>
</html>