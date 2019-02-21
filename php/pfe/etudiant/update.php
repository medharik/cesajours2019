<?php 
include "module.php";
extract($_POST);
modifier($id,$libelle,$prix);
header("location:index.php");

?>