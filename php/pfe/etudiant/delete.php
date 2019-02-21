<?php 
include "module.php";
$id=$_GET['id'];
supprimer($id);
header("location:index.php");
?>