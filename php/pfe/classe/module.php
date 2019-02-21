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
function ajouter($nom){
    try{
$connexion=connecter_db();
$rp=$connexion->prepare("insert into  classe(nom) values(?)");
$rp->execute(array($nom));
} catch (PDOException $e) {
    echo "Erreur d'ajout de classe ".$e->getMessage();
}
}
function supprimer($id){
    try{
$connexion=connecter_db();
$rp=$connexion->prepare("delete from classe where id=?");
$rp->execute(array($id));
    } catch (PDOException $e) {
        echo "Erreur de suppression de classe ".$e->getMessage();
    }
}

function modifier($id,$nom){
    try{
$connexion=connecter_db();
$rp=$connexion->prepare("update classe set nom=? where id=?");
$rp->execute(array($nom,$id));
    } catch (PDOException $e) {
        echo "Erreur de modification de classe ".$e->getMessage();
    }
}
function consulter($id){
    try{
$connexion=connecter_db();
$rp=$connexion->prepare("select * from classe where id=?");
$rp->execute(array($id));
$resultat=$rp->fetch();
    } catch (PDOException $e) {
        echo "Erreur de consultation de classe ".$e->getMessage();
    }
return $resultat;
}

function get_all(){
try{
    $connexion=connecter_db();
    $rp=$connexion->prepare("select * from classe");
      $rp->execute();
  
  $classes=$rp->fetchAll();

} catch (PDOException $e) {
    echo "Erreur dans recuperation des classes".$e->getMessage();
        }
    return $classes;    
}
    
function charger($infos){
    $tmp=$infos['tmp_name'];
    $nom=$infos['name'];
    $new_chemin='images/'.md5(date('ymdhis')).$nom;
    move_uploaded_file($tmp,$new_chemin);
    return $new_chemin;


}
?>