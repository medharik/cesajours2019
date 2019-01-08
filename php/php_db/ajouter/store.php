<?php 
//recuprer les datas
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
//connection db
$link=mysqli_connect("localhost","user1","test","dbphp") or die("erreur de connexion a la base de donnees");
//requete sql
$sql="insert into produit (libelle,prix) values ('$libelle',$prix)";

//execute la requete (query) sql  
mysqli_query($link,$sql) or die("erreur de requete d'ajout ");

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
    ajout effectue avec succes
</body>
</html>