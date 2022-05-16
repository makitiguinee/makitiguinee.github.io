<?php 
   //cest une fonction qui permet de recuperer le nom et le prenom d'un utilisateur pour les session
   function sessioner($mail){
    include('include/connexion.php'); 
    $text="";
  try{
    $con=new PDO('mysql:host='.$server.';'.'dbname='.$dbname.'',$user,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $req=$con->query("SELECT nom,prenom FROM compte WHERE mail='$mail'"); 
    $result=$req->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $ligne){
      $text=$ligne['prenom'];
    } 
    }catch(PDOexeception $e){
     echo 'ERREUR'.$e->getMessage().'<br>';
     die();
    }
    return $text;
}
?>