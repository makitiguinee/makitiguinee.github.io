<?php
  function traitement(){
       include('include/connexion.php');  
       $resutat=0;
       if(isset($_FILES['photo'])){
       $photo=$_FILES['photo']['name'];
       $photo_tmp=$_FILES['photo']['tmp_name'];
       strtolower($photo);
       $tt=explode('.',$photo);
       $ss=end($tt);
       if(isset($ss)){
       if($ss=='jpeg'OR $ss=='jpg'OR $ss=='jpng' OR $ss=='gif'){
          $resutat=1;
       }
       }
    }
  return  $resutat;
}
?>