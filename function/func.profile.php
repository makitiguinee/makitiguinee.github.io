<?php

     function profile($mail){
     include('include/connexion.php');
   try{
      $con=new PDO('mysql:host='.$server.';'.'dbname='.$dbname.'',$user,$password);
      $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       $req=$con->query("SELECT nom,prenom,tel,mail,photo_profill FROM compte WHERE mail='$mail'");
       $result=$req->fetchAll(PDO::FETCH_ASSOC);
      }catch(PDOexeception $e){
       echo 'ERREUR'.$e->getMessage().'<br>';
       die();
      }
     return $result;
   }

?>