<?php 
$ali=array('nom'=>'ali',"age"=>19);
$ghita=array('nom'=>'ghita',"age"=>30);
$classe=array(0 =>$ali,1=>$ghita);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercice php </title>
</head>
<body>
    <h1>les informations de <?php echo $ali["nom"] ;?> </h1>
    <p>
    age est : <?php echo  $ali['age'];?> <br>
    </p>
<hr>
<?php 
foreach ($ali as $c => $v) {?>
<?php echo $c ?> est : <?php echo $v;?>
<h3></h3>
<?php } ?>
<hr>
<?php  foreach ($classe as $c => $v) {?>
<?php foreach ($v as $c1 => $v1 ) {?>
<h3> <?php echo $c1 ?> est <?php echo $v1 ;?></h3>
    <?php }?>
    <?php }?>
</body>
</html>