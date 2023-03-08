<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Contact</title>
</head>
<body>
<?php  require_once 'header.php'; ?>
<h1>Contact</h1>
<Label>Administrateur</label>
<ul>
<li>Adrien</li>
<li>AdrienGeoworld@gmail.com</li>
<li>06XXXXXXXX</li>
</ul>
<label>Professeurs</label>
<ul>
<li>Deva</li>
<li>DevaGeoworld@gmail.com</li>
<li>07XXXXXXXX</li>
</ul>
<ul>
<li>Steeven</li>
<li>SteevenGeoworld@gmail.com</li>
<li>07XXXXXXXX</li>
</ul>
<form method="post" action="mail.php">
        <label>Votre email</label><br>
        <input type="email" name="email" required><br>
        <label>Sujet</label><br>
        <input type="text" name="text" required><br>
        <label>Message</label><br>
        <!--textarea permet de saisir plusieur ligne de texte-->
        <textarea rows="5" cols="30" name="message" required></textarea><br>
        <input type="submit" value="Envoyer">
    </form>
    <?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
</body>