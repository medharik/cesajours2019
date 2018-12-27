<?php
$libelle=$_POST['libelle'];
if (isset($_POST['prix'])) {
 $prix=$_POST['prix'];
echo "prix est $prix DHS";
}else {
    echo "on n'a pas recu de prix<br>";
}

// $y=0;
// //empty = "", 0,0.0, array(),[],false
// 

// var_dump(isset($y));
// var_dump(!empty($y));


// if (!(isset($_POST['libelle']) && !empty($_POST['libelle']))) {
//  echo "le libelle est obligatoire";
// }

if(!isset($_POST['libelle'] ) || empty($_POST['libelle']) ){
//redirection
    header("location:form.php?x=no");

}

?>

