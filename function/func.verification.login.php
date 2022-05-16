<?php
  function verification_login($mail,$pass){
       include('include/connexion.php'); 
    
     try{
       $con=new PDO('mysql:host='.$server.';'.'dbname='.$dbname.'',$user,$password);
       $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
        $req=$con->query('SELECT * FROM compte');
        
       $result=$req->fetchAll(PDO::FETCH_ASSOC);
       $text=1;
       foreach($result as $ligne){
         if(strtolower($ligne['mail'])==strtolower($mail)){
            if(password_verify($pass,$ligne['passwrd'])){
              $text=0;
            }
         }   
        }
       }catch(PDOexeception $e){
        echo 'ERREUR'.$e->getMessage().'<br>';
        die();
       }
       return $text;
   }
?>