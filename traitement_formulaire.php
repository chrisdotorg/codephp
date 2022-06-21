<?php
$age = 18 ;
$majeur = ($age >= 18 ) ? true : false;
echo $majeur;
    $nom = $_POST['nom'];
    echo "\n le nom du visiteur est ". $nom ;
    echo "\n le prenom du visiteur est ".  $_POST['prenom'];
    echo "\n le visiteur est ne le  ". $_POST['date_naissance'];
    echo "\n le visiteur est un ". $_POST['profession'];

    //echo "\n le voyage des donnees ne s'est pas tres bien passe";
?>