<?php 
include('module.php');

extract($_POST);
$chemin=charger($_FILES['chemin']);
ajouter($nom,$prenom,$classe_id,$chemin);
header("location:index.php");
?>