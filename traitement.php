<?php
 include("con.php");
    /// insertion des donnees dans la database
    $req = $bdd->prepare('INSERT INTO minichat (pseudo,message) VALUES (?,?)');
    $req->execute(array($_POST['pseudo'],$_POST['message']));
    ///redirection du visiteur vers une autre page
    header('Location: minichat.php');
?>