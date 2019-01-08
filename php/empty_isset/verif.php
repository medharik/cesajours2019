<?php 

$nom=$_POST['nom'];
$age=$_POST['age'];
if(isset($_POST['prenom'])){
$prenom=$_POST['prenom'];
}

if(empty($nom)){
    //redirection
header("location:form1.php?co=nom&c=o&x=y");

}
if(empty($age)){
header("location:form1.php?co=age");
}
if(!is_numeric($age)){
    header("location:form1.php?a=no");

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
    
   Nom est : <?php echo $nom?><br>
   Age est : <?php echo $age?>
</body>
</html>