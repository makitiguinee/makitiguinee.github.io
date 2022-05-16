<?php
function verification($mail){
 include('include/connexion.php'); 
 
  try{
    $con=new PDO('mysql:host='.$server.';'.'dbname='.$dbname.'',$user,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

     $req=$con->query('SELECT mail FROM compte');
     
    $result=$req->fetchAll(PDO::FETCH_ASSOC);
    $text=1;
    foreach($result as $ligne){
      if(strtolower($ligne['mail'])==strtolower($mail))
       $text=0;
     }
    }catch(PDOexeception $e){
     echo 'ERREUR'.$e->getMessage().'<br>';
     die();
    }
    return $text;
}

function inserer($nom,$prenom,$sex,$age,$tel,$mail,$ville,$photo,$passwrd){
  include('include/connexion.php'); 
  try{
    $con=new PDO('mysql:host='.$server.';'.'dbname='.$dbname.'',$user,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
    $req=$con->query("INSERT INTO compte(nom,prenom,age,sex,photo_profill,mail,tel,passwrd,ville_id_ville)  VALUES('$nom','$prenom','$age','$sex','$photo','$mail',$tel,'$passwrd',$ville)");
    if($req){
      echo 'insertion effetuer avec succe';
    }else{
      echo 'insertion non effectuer';
    }
    }catch(PDOexeception $e){
    
    echo 'ERREUR'.$e->getMessage().'<br>';
    die();
   }
}
?>