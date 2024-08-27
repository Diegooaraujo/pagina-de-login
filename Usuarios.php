<?php 

    class usuarios{
        private $pdo;

        public function conectar(){
            $dbname = "paginadelogin";
            $host = "127.0.0.1";
            $user ="root";
            $senha ="";
            try{
                $this->pdo = new PDO("mysql:dbmane=".$dbname.";host=".$host,$user,$senha);
            }catch(PDOException $e){
                echo $e;
            }
        }

        public function cadastrar ($nome,$email,$senha){
            //verificar se ja esta cadastrado 
            $sql = $this->pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
            $sql->bindValue("email",$email);
            $sql->execute();
            if (count($sql)>0){ //ja esta cadastrada
                return false;
            }else{//não esta cadastrada/ cadastrar
                $sql = $this->pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUE (:n,:e,:s)");
                $sql->bindValue(':n',$nome);
                $sql->bindValue(':e',$email);
                $sql->bindValue(':s',$senha);
                $sql->execute();
                return true;
                
            }
        }

        public function logar($email,$senha){
            
        }


    }
    

   
    


?>