<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if(isset($_GET['co']) && $_GET['co']=='nom'){

    echo "le nom est obligatoire";
   
} ?>
<?php if(isset($_GET['a']) && $_GET['a']=='no'){

echo "l'age  doit etre numerique";

} ?>
<?php if(isset($_GET['co']) && $_GET['co']=='age'){

echo "l'age est obligatoire";
if(isset($_GET['x'])){
    $x=$_GET['x'];
}

} ?>
    
    <form action="verif.php" method="post">
    <input type="text" name="nom" id="nom"  placeholder="Nom">
    <input type="number" name="age" id="age"  placeholder="Age">
    <input type="submit" value="Envoyer">

    </form>
</body>
</html>