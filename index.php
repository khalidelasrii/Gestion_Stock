<?php
session_start();


if (!isset($_SESSION['id_user']) || (isset($_SESSION['id_user']) && $_SESSION['id_user'] == '')) {
	header("Location: login.php?erreur_session");
} else {
	header("Location: ./dashbord/index.php");
}
