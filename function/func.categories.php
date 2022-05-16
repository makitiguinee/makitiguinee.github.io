<?php
//afficher toutes les categories du site
function categorie()
{
    include('include/connexion.php');
   try{
      $con=new PDO('mysql:host='.$server.';'.'dbname='.$dbname.'',$user,$password);
      $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       $req=$con->query("SELECT non_categorie FROM categorie ORDER BY non_categorie ASC");
       $result=$req->fetchAll(PDO::FETCH_ASSOC);
      }catch(PDOexeception $e){
       echo 'ERREUR'.$e->getMessage().'<br>';
      }
     return $result;
 }
?>