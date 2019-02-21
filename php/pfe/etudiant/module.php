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
function ajouter($nom,$prenom,$classe_id,$chemin){
    try{
$connexion=connecter_db();
$rp=$connexion->prepare("insert into 
 etudiant(nom,prenom,classe_id,chemin) values(?,?,?,?)");
$rp->execute(array($nom,$prenom,$classe_id,$chemin));
} catch (PDOException $e) {
    echo "Erreur d'ajout de etudiant ".$e->getMessage();
}
}
function supprimer($id){
    try{
$connexion=connecter_db();
$rp=$connexion->prepare("delete from etudiant where id=?");
$rp->execute(array($id));
    } catch (PDOException $e) {
        echo "Erreur de suppression de etudiant ".$e->getMessage();
    }
}

function modifier($id,$nom,$prenom,$classe_id){
    try{
$connexion=connecter_db();
$rp=$connexion->prepare("update etudiant 
set nom=? , prenom=? , classe_id=? where id=?");
$rp->execute(array($nom,$prenom,$classe_id,$id));
    } catch (PDOException $e) {
        echo "Erreur de modification de etudiant ".$e->getMessage();
    }
}
function consulter($id){
    try{
$connexion=connecter_db();
$rp=$connexion->prepare("select * from etudiant where id=?");
$rp->execute(array($id));
$resultat=$rp->fetch();
    } catch (PDOException $e) {
        echo "Erreur de consultation de etudiant ".$e->getMessage();
    }
return $resultat;
}

function get_all(){
try{
    $connexion=connecter_db();
    $rp=$connexion->prepare("select * from etudiant");
      $rp->execute();
  
  $etudiants=$rp->fetchAll();

} catch (PDOException $e) {
    echo "Erreur dans recuperation des etudiants".$e->getMessage();
        }
    return $etudiants;    
}
    
function charger($infos){
    $tmp=$infos['tmp_name'];
    $nom=$infos['name'];
    $new_chemin='images/'.md5(date('ymdhis')).$nom;
    move_uploaded_file($tmp,$new_chemin);
    return $new_chemin;


}
?>