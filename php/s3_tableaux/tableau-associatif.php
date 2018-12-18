<?php 
//tableau associatif (case avec nom , les cles sont des noms)
$produit =array("nom"=> "mac air","prix" => 8000,"ecran"=>"15 pouces",
"config"=>"core i3", "ram"=>"8 GO RAM","dd"=>"500Go","2018")  ;

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
<h1>Les informations de : <?php echo $produit["nom"] ; ?></h1>
<h2>Prix  : <?php echo $produit["prix"]; ?> DHS</h2>
<h2>Ecran  : <?php echo $produit["ecran"]; ?></h2>
<h2>RAM : <?php  echo $produit["ram"] ?></h2>

    
</body>
</html>