<?php
include("con.php");
$reponse = $bdd->query('SELECT pseudo ,message, DAY(date) AS jour,
 MONTH(date) AS mois , YEAR(date) AS annee , HOUR(date) AS heure,
  MINUTE(date) AS minute,SECOND(date) AS seconde FROM minichat');
$donnees = $reponse->fetch();
try {
    while ($donnees = $reponse->fetch()) {
        $jour = $donnees['jour'];
        $mois = $donnees['mois'];
        $annee = $donnees['annee'];
        $heure = $donnees['heure'];
        $minute = $donnees['minute'];
        $seconde = $donnees['seconde'];
        echo $jour . '/' . $mois . '/' .$annee . 'a ' .$heure . '' .$minute . ' ' .$seconde ;
    }
}catch(Exception $e)
{
    die($e->getMessage());
}
$reponse->closeCursor();
?>