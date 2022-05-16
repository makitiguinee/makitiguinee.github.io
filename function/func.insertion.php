
<?php
include('include/connexion.php');  
 //affichage des villes;
  try{
   $con=new PDO('mysql:host='.$server.';'.'dbname='.$dbname.'',$user,$password);
   $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $req=$con->query('SELECT * FROM ville ORDER BY nom_ville  ASC');
    $result=$req->fetchAll(PDO::FETCH_ASSOC);
   }catch(PDOexeception $e){
    echo 'ERREUR'.$e->getMessage().'<br>';
    die();
   }

?>