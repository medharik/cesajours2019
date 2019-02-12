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
function ajouter($libelle,$prix){
    try{
$connexion=connecter_db();
$rp=$connexion->prepare("insert into  produit(libelle,prix) values(?,?)");
$rp->execute(array($libelle,$prix));
} catch (PDOException $e) {
    echo "Erreur d'ajout de produit ".$e->getMessage();
}
}
function supprimer($id){
    try{
$connexion=connecter_db();
$rp=$connexion->prepare("delete from produit where id=?");
$rp->execute(array($id));
    } catch (PDOException $e) {
        echo "Erreur de suppression de produit ".$e->getMessage();
    }
}

function modifier($id,$libelle,$prix){
    try{
$connexion=connecter_db();
$rp=$connexion->prepare("update produit set libelle=? , prix=? where id=?");
$rp->execute(array($libelle,$prix,$id));
    } catch (PDOException $e) {
        echo "Erreur de modification de produit ".$e->getMessage();
    }
}
function consulter($id){
    try{
$connexion=connecter_db();
$rp=$connexion->prepare("select * from produit where id=?");
$rp->execute(array($id));
$resultat=$rp->fetch();
    } catch (PDOException $e) {
        echo "Erreur de consultation de produit ".$e->getMessage();
    }
return $resultat;
}

function get_all(){
try{
    $connexion=connecter_db();
    $rp=$connexion->prepare("select * from produit");
      $rp->execute();
  
  $produits=$rp->fetchAll();

} catch (PDOException $e) {
    echo "Erreur dans recuperation des produits".$e->getMessage();
        }
    return $produits;    
}
    
?>