<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/stilo.css">
</head>
<body>
    <div class="conteiner">
        <form action="" method="POST">
            <h1>Login</h1>
            <label for="email">E-mail:</label>
            <input type="email" name="email" placeholder="Email" id="email">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" placeholder="senha" id="senha"> 
            <input type="submit" value="Enviar" id="Enviar" name="submit">
            <a href="cadastrar.php">Cadastrar</a>

        </form>
    </div>

    <?php
    include_once("Usuarios.php");
        $sql = new Usuarios;
        


    if(isset($_POST['submit'])){
        $email=addslashes($_POST['email']);
        $senha=addslashes($_POST['senha']);
        

        if(empty($email)&&empty($senha)){
            echo "preencha todos os campos";
        }else{
            $sql->conectar();
            
            if($sql->logar($email,$senha)){
                header("lacation: areaPrivada.php");
            }else{
                echo"email ou senha não encontrado";
                
            }
        }
    }
    
    ?>
</body>
</html>