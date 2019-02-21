<?php 
include('module.php');
extract($_POST);
charger($_FILES['chemin']);
ajouter($nom);
header("location:index.php");
?>