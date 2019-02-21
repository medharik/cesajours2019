<?php 
include "module.php";
extract($_POST);
modifier($id,$nom);
header("location:index.php");

?>