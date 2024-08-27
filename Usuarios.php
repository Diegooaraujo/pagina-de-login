<?php 

    class usuarios{
        private $pdo;

        public function conectar(){
            $dbname = "paginadelogin";
            $host = "127.0.0.1";
            $user ="root";
            $senha ="";
            try{
                $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
            }catch(PDOException $e){
                echo $e;
            }
        }

        public function cadastrar ($nome,$email,$senha){
            //verificar se ja esta cadastrado 
            $sql = $this->pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
            $sql->bindValue(":email",$email);
            $sql->execute();
            if ($sql->rowCount()>0){ //ja esta cadastrada
                return false;
            }else{//não esta cadastrada/ cadastrar
                $sql = $this->pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUE (:n,:e,:s)");
                $sql->bindValue(':n',$nome);
                $sql->bindValue(':e',$email);
                $sql->bindValue(':s',$senha); //md5 para criptografar
                $sql->execute();
                return true;
                
            }
        }

        public function logar($email,$senha){
            //verificar e mail e senha 
             $sql = $this->pdo->prepare("SELECT id FROM usuarios WHERE email = :e AND senha = :s");
             $sql->bindValue(":e",$email);
             $sql->bindValue(":s",$senha);
             $sql->execute();
             
            
             
                if($sql->rowCount() > 0){
                     //ja esta cadastrado
                     
                    $dado = $sql->fetch();
                    session_start();
                    $_SESSION['id_usuario']=$dado['id'];
                
                    return true;
                
                }else{
                    //não esta cadstrado
                
                    return false;   
                }
        }


    }
    

   
    


?>