<?php
session_start();
$_SESSION["user_sphinx_sp"]=null;
//$_SESSION["message"]="Successfully Logout";
header("Location:index.php");	

?>
