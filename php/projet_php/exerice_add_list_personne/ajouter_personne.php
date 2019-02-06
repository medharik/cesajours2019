<?php 
include 'module.php';
$nom=$_POST['nom'];
ajouter_personne($nom);
//redirection vers liste_personne;
header("location:liste_personne.php");
?>