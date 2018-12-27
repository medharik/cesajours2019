<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>isset etv empty</title>
</head>
<body>
    <?php  if(isset($_GET['x'])) echo "Libelle est obligatoire"; ?>
<form action="verification.php" method="post">
    Libellé : <input  type="text" required name="libelle"  >
    Prix : <input type="number" name="prix" id="prix" min="0">
    <input type="submit" value="valider">
</form>

<?php if(isset($_GET['nom']) && !empty($_GET['nom'])) {

echo "le nom est ".$_GET['nom'];
}

?>


</body>
</html>