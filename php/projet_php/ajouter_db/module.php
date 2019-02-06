<?php 
//fonction de connexion
function connecter_db(){
    try{
    $connexion=new PDO("mysql:host=localhost;dbname=dbpfe",'root','');
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo "Erreur de connexion ".$e->getMessage();
    }
return $connexion;
} 
function ajouter_produit($libelle,$prix){
$connexion=connecter_db();
$rp=$connexion->prepare("insert into  produit(libelle,prix) values(?,?)");
$rp->execute(array($libelle,$prix));
}

function get_all(){
try{
    $connexion=connecter_db();
    $rp=$connexion->prepare("select * from produit");
      $rp->execute();
  
  $produits=$rp->fetchAll();

} catch (PDOException $e) {
    echo "Erreur dans get all ".$e->getMessage();
        }
    return $produits;    
}
    
?>