<?php 
//tableau associatif (case avec nom , les cles sont des noms)
$produit =array("nom"=> "mac air","prix" => 8000,"ecran"=>"15 pouces",
"config"=>"core i3", "ram"=>"8 GO RAM","dd"=>"500Go","2018")  ;

$mac =array("nom"=> "mac air","prix" => 8000,"ecran"=>"15 pouces",
"config"=>"core i3", "ram"=>"8 GO RAM","dd"=>"500Go","2018")  ;
$hp =array("nom"=> "hp dv6","prix" => 6000,"ecran"=>"15 pouces",
"config"=>"core i3", "ram"=>"6GO RAM","dd"=>"400Go","2018")  ;
$listeproduits=array($mac,$hp);
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
<hr>
<?php foreach ($produit as $c => $v) { ?>
<h2> <?php echo $c;?> est :   <?php echo $v;?>  </h2>
<?php } ?>
<hr>
<?php foreach ($listeproduits as $c1 => $v1) {?>
    <?php foreach ($v1 as $c => $v) {?>
       <h3>  <?php  echo "$c est $v"; ?></h3>

<?php } ?>
<?php } ?>
</body>
</html>