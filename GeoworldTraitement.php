<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Traitement Geoworld</title>
</head>
<body>

<?php
require_once('inc/connect-db.php');

            echo 'Login : ' .$_POST['login'].'<br>';
            echo 'Mot de passe : ' .$_POST['pwd'].'<br>';
            echo 'Nom : ' .$_POST['nom'].'<br>';
            echo 'Prénom : ' .$_POST['prenom'].'<br>';
            echo 'Date de naissance : ' .$_POST['calendrier'].'<br>';


$login = $_POST['login'];
$password = $_POST['pwd'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$calendrier= $_POST['calendrier'];
$role = $_POST['visiteur'];





$sql = " INSERT into utilisateur (login, password, nom, prenom, date_naissance, role)
values ('$login','$password','$nom', '$prenom', '$calendrier', 'visiteur')";
try {
//on prépare la requête avec les données reçues
$statement = $pdo->prepare($sql);
$statement->bindParam(':login',$login,PDO::PARAM_INT);
$statement->bindParam(':pwd',$password,PDO::PARAM_INT);
$statement->bindParam(':id',$id,PDO::PARAM_INT);
$statement->bindParam(':nom', $nom, PDO::PARAM_STR);
$statement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
$statement->bindParam(':naissance', $naissance, PDO::PARAM_STR);



$statement->execute();
//On renvoie vers la page Geoworld
 header("Location:InscripSucces.php"); 
}

catch(PDOException $e){
 echo 'Erreur : '.$e->getMessage();
}

?>
</body>