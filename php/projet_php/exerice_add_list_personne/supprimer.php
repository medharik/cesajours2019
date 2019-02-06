<?php 
include('module.php');
$id=$_GET['id'];
supprimer_personne($id);
header("location:liste_personne.php");
?>