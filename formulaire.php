<?php
session_start();
$_SESSION['prenom'] = 'Jean';
$_SESSION['nom'] = 'Dupont';
$_SESSION['age'] = 24;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> formulaires </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="formulaire.css">
</head>

<body>
    <p> Bienvenue en html 5. nous allons commencer avec l'utilisation des formulaires<br/> ce formulaire que vous voyez est tout ce qu'il y a de plus simple quand on parle de formulaire
    </p>
    <form action="traitement_formulaire.php" method="POST" enctype="multipart/form-data">
        <label for="name">Votre nom        :</label>
        <input type="text" name="nom" id="nom" /> <br/><br/>
        <label for="prenom">Votre prenom:</label>
        <input type="text" name="prenom" id="prenom" /> <br/><br/>
        <label for="date_naissance">Votre Date de naissance:</label>
        <input type="date" name="date_naissance" id="date_naissance" /> <br/><br/>
        <label for="profession">Votre profession</label>
        <input type="text" name="profession" id="profession" /> <br/><br/>
        <label for="situation_matrimoniale">situation matrimoniale:</label>
        <input type="checkbox" name="choix" id="choix" />
        <label for="choix"> Celibataire </label>
        <input type="checkbox" name="choix" id="choix">
        <label for="choix">Marie</label><br/><br/>
        <input type="submit" value="ENVOYER">
    </form>
    <?php
    include ("fibonacci.php");
    $slogan = "je suis rich.com et je suis en train de me preparer pour devenir un codeur top modele";
    $slogan = str_shuffle($slogan);
    $annee = date("Y");
    $mois = date("m");
    $jour = date("d");
    $heure = date("H");
    $heure = $heure - 2;
    $minute = date("i");
    echo "\n aujourd'hui, nous sommes mercredi le ". $jour . " " . $mois . " " .$annee  ; 
    echo "\n . il est exactement ". $heure . "h ". $minute. " minutes"; 
    echo "\n voici une chaine de caractere qui a ete melangee ". $slogan;
    echo $_SESSION['nom'];
    echo $_SESSION['prenom'];
    echo $_SESSION['age'];
    ?>
</body>

</html>