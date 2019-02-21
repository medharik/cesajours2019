<?php 
include "module.php";
$id=$_GET['id'];
$etudiant=consulter($id);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification  du etudiant</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php  include_once('menu.php'); ?>
<div class="container">
<div class="row">
<div class="col-md-6 mx-auto">
<form action="update.php" method="post">
  <div class="form-group">
  <input type="hidden" name="id" value="<?php echo $etudiant['id'];?>">
    <label for="nom">Nom</label>
    <input value="<?php echo $etudiant['nom'];?>" type="text" name="nom" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="prenom">prenom</label>
    <input value="<?php echo $etudiant['prenom'];?>" type="number" name="prenom" class="form-control" id="prenom" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="classe_id">Classe</label>
    <input value="<?php echo $etudiant['classe_id'];?>" type="number" name="prenom" class="form-control" id="prenom" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary">Modifier l' etudiant</button>
</form>
</div>
</div>

</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
</body>
</html>