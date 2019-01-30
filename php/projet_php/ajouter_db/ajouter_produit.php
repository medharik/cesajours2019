<?php 
include 'module.php';
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
ajouter_produit($libelle,$prix);
echo "ajout effectue avec succes";

?>