<?php
session_start();


if ( !isset($_SESSION['id_user']) || (isset($_SESSION['id_user']) && $_SESSION['id_user'] == '') )
 {
 	header("Location: login.php?erreur_session");
 } 


 echo $_SESSION['nom_user'];





 ?>