<?php
$produits=array("hp", "dell","sony","mac air");
$produits[]="ACER";
//unset($produits[0]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-6">
<ul  class="list-group">
<li class="list-group-item active "> listes des produits</li>
<?php foreach($produits as $c => $v) { ?>

<?php if($v !="sony"){ ?>

<li  class="list-group-item ">Produit numero <?= $c ?>  est : <?= $v?></li>
<?php } ?>
<?php } ?>


</ul>
</div>
</div>
</div>
</body>
</html>