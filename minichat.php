<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Minichat </title>
</head>
<style>
form
{
    text-align: center;
}
</style>
<body>
    <p> Voici une espece de Minichat histoirede rendre la vie plus conviviale</p>
    <form action="traitement.php" method="post">
        <label for="pseudo"> Votre pseudo :</label>
        <input type="text" name="pseudo" id="pseudo"/> <br />
        <label for="message"> Entrez votre message </label>
        <input type="text" name="message" id="message"/> <br />
        <input type="submit" value="ENVOYER"/>
    </form>
    <?php
    /// connection a la database
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=test','root','');
    }
    catch(Exception $e)
    {
        die('error :'. $e->getMessage());
    }
    /// recuperation des messages
    $reponse = $bdd->query('SELECT pseudo,message FROM minichat ORDER BY ID DESC LIMIT 0,10');
    while($donnee = $reponse->fetch())
    {
        echo "<strong>". htmlspecialchars($donnee['pseudo']). "</strong> :<br/ ><br/ >". htmlspecialchars($donnee['message']);
    }
    $reponse->closeCursor();
    ?>
</body>
</html>