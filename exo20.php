<?php
$prix_moyen = $donnees['prix_moyen'];
 echo $prix_moyen; 
 // ------------------- echo '<br/><br/>'; 
 // ------------------- 
 $reponse = $bdd->prepare('SELECT prix FROM jeux_video WHERE prix > ?');
  $reponse->execute(array($prix_moyen));
   while ($donnees = $reponse->fetch())
 {
      echo $donnees['prix'] . '<br />';
 } 
 ?>