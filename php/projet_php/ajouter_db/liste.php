<?php 
include("module.php");
$produits=get_all();
//var_dump($produits);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>liste des produits</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Ref</th>
      <th scope="col">Libelle</th>
      <th scope="col">Prix</th>
    </tr>
  </thead>
  <tbody>
   
<?php foreach($produits as $p) {?>

    <tr>
      <th scope="row">
      <?php echo $p['id'];?>
      </th>
      <td><?php echo $p['libelle'];?></td>
      <td><?php echo $p['prix'];?></td>
     
    </tr>
<?php } ?>

   
  </tbody>
</table>
    
</body>
</html>