<?php
function traitement_form($nom_boutique,$nom_quarter,$momo,$photo_boutique,$orange_money,$carte_bancaire,$paypal,$longitude,$laltitude)
 {
    $nom_boutique=$_POST['nom_b'];
    $nom_boutique=addslashes($nom_boutique);
    $nom_boutique=htmlentities($nom_boutique);
    $nom_boutique=trim($nom_boutique);

    $nom_quarter=$_POST['adress_b'];
    $nom_quarter=addslashes($nom_quarter);
    $nom_quarter=htmlentities($nom_quarter);
    $nom_quarter=trim($nom_quarter);

    $momo=$_POST['momo_b'];
    $momo=addslashes($momo);
    $momo=htmlentities($momo);
    $momo=trim($momo);

    $orange_money=$_POST['orange_b'];
    $orange_money=addslashes($orange_money);
    $orange_money=htmlentities($orange_money);
    $orange_money=trim($orange_money);

    $carte_bancaire=$_POST['carte_b'];
    $carte_bancaire=addslashes($carte_bancaire);
    $carte_bancaire=htmlentities($carte_bancaire);
    $carte_bancaire=trim($carte_bancaire);

    $paypal=$_POST['paypal_b'];
    $paypal=addslashes($paypal);
    $paypal=htmlentities($paypal);
    $paypal=trim($paypal);

    $longitude=$_POST['logi_b'];
    $longitude=addslashes($longitude);
    $longitude=htmlentities($longitude);
    $longitude=trim($longitude);

    $laltitude=$_POST['lalti_b'];
    $laltitude=addslashes($laltitude);
    $laltitude=htmlentities($laltitude);
    $laltitude=trim($laltitude);
    $tableau=array();
    return $tableau=($nom_boutique);

 }
?>