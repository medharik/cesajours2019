<?php 
//fonction de connexion
function connecter_db(){
    try{
    $connexion=new PDO("mysql:host=localhost;dbname=ngangoye",'root','');
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
   



function ajouter_personne($nom){
    $connexion=connecter_db();
    $rp=$connexion->prepare("insert into  personne (nom) values (?)");
    $rp->execute(array($nom));
    }


    function supprimer_personne($id){
        $connexion=connecter_db();
        $rp=$connexion->prepare("delete from personne where id=?");
        $rp->execute(array($id));
        }
    function personne_all(){
        try{
            $connexion=connecter_db();
            $rp=$connexion->prepare("select * from personne");
              $rp->execute();
          
          $produits=$rp->fetchAll();
        
        } catch (PDOException $e) {
            echo "Erreur dans personne all ".$e->getMessage();
                }
            return $produits;    
        }



?>