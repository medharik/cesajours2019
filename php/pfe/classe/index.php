<?php 
include "module.php";
$classes=get_all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des classes</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php  include_once('../menu.php'); ?>
<br>
<br>
<br>
<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr >
      <th  scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
<?php  foreach($classes as $p) {?>

    <tr>
      <th scope="row">
      <?php echo $p['id'];?>
      </th>
     <td>
      <?php echo $p['nom'];?>

      </td>
     
      <td>
      <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $p['id'];?>">Supprimer</a>
      <a class="btn btn-info btn-sm" href="show.php?id=<?php echo $p['id'];?>">Consulter</a>
      <a class="btn btn-warning btn-sm" href="edit.php?id=<?php echo $p['id'];?>">Modifier</a>
      </td>
    </tr>
<?php } ?>
  </tbody>
</table>



</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('.table').DataTable();
} );
</script>
</body>
</html>