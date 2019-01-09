<?php 
//recuprer les data
if(isset($_POST['matricule'])){
$matricule=$_POST['matricule'];
// connection db
$adresse=mysqli_connect("localhost","root","","dbrevision") or die("erreur de connexion bd");
//requete sql
$lettre="insert into voiture(matricule) values('$matricule')";
//lancer la requete 
mysqli_query($adresse,$lettre) or die("erreur requete d'ajout");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Bien recu</h2>
    
</body>
</html>
