<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulaire Geoworld</title>
</head>
<body>
    
<?php
require_once('inc/connect-db.php');
require_once('inc/manager-db.php');
?>
<form action="GeoworldTraitement.php" method="post">
<h1>Inscription</h1>

<p>Utilisateur <input type="text" name="login"></p>

<p>Mot de passe <input type="password" name="pwd"></p>

<p>Nom <input type="text"  name="nom" required></p>

<p>Prenom <input type="text" name="prenom" required></p>

<p>Date de naissance
      <input type="date" name="calendrier" required></p>

<input type="submit" value="S'inscrire">
   
</form>
</body>
</html>