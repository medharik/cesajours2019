<?php 
include("module.php");
$personnes= personne_all();
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
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
   
<?php foreach($personnes as $p) {?>

    <tr>
      <th scope="row">
      <?php echo $p['id'];?>
      </th>
      <td><?php echo $p['nom'];?></td>
     <td><a onclick="return confirm('supprimer?')" href="supprimer.php?id= <?php echo $p['id'];?>" class="btn btn-danger">Supprimer</a></td>
    </tr>
<?php } ?>

   
  </tbody>
</table>
    
</body>
</html>