<?php 
//fonction de connexion
function connecter_db(){

$connexion=new PDO("mysql:host=localhost;dbname=dbpfe",'root','');
return $connexion;
} 

function ajouter_produit($libelle,$prix){
$connexion=connecter_db();
$rp=$connexion->prepare("insert into  produit(libelle,prix) values(?,?)");
$rp->execute(array($libelle,$prix));
}

?>