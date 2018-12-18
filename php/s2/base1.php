<?php 
//variables  
$nom="alami";
$prenom="rim";
$age=19;
$sexe="homme";

if($age > 18){
$majorite ="Majeur";
}else{
    $majorite="mineur";
 }
  $age += 90;
// $x = "test ";
// $x .= "php ";
// $x .=" les bases";
// echo  $x;
$situation="celibataire";
if($sexe=="homme"){
$politesse="Mr.";
}else{
    
    $politesse="Mme.";

if($situation=="celibataire"){

$politesse="Mlle.";
}
}

//les tableaux  indexé: 
$etudiant=["karimi","hajjoubi","omar",100];
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>les bases 1 </title>
</head>
<body>
<h2>Les informations de :
<?php echo $politesse;?> 
<?php echo $nom; ?> <?php  echo $prenom ;?></h2>
<ul>
<li> Nom complet : <?php echo $nom ;?> <?php echo $prenom ;?></li>
<li>Age : <?php echo  $age;?>  ans</li>
<li> <?php echo $majorite ?>  </li>
<li>Situation familialle  : <?php echo $situation; ?> </li>
</ul>
    
  <hr>
  <h2>
  <?php echo "bonjours $nom ";?>
  </h2>
<h3>
Bonjours <?php echo  $nom ;?>

</h3>
<?php echo ' bonjours $nom ';?>
<h3><?php echo ' bonjours '.$nom;?>

</h3>
<hr>
<h2>liste des etudiants :</h2>
<ol>
<li><?php echo $etudiant[0] ;?></li>
<li><?php echo $etudiant[1] ;?></li>
<li><?php echo $etudiant[2] ;?></li>
<li><?php echo $etudiant[3] ;?></li>
</ol>
</body>
</html>