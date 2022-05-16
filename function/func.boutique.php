<?php 
  function boutique($nomb,$adb,$mom,$orange,$ban,$paypal,$photob,$maill){

    include('include/connexion.php');
   try{
      $con=new PDO('mysql:host='.$server.';'.'dbname='.$dbname.'',$user,$password);
      $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       $idcompte=query("SELECT id_compte FROM compte WHERE mail='$maill'");
       $id=$idcompte->fetch();
       $req=$con->query("INSERT INTO boutique(nom_boutique,nom_quarter,momo,orange_money,carte_bancaire,paypal,photo_boutique,id_compte)
       VALUES('$nomb','$adb','$mom','$orange','$ban','$paypal','$photob',$id)");;
      }catch(PDOexeception $e){
       echo 'ERREUR INSERTION'.$e->getMessage().'<br>';
      }
      
?>
