<?php
session_start();

require_once 'config/connexion.inc.php';
require_once 'config/bdd.inc.php';
include_once 'include/header.inc.php';

$compteur = "SELECT COUNT(*) as nbarticles FROM articles WHERE publie = 1";
$requestcompteur = mysql_query($compteur);

$resultcompt = mysql_fetch_array($requestcompteur);
$nbarticles = $resultcompt['nbarticles'];
//echo $nbarticles;

$nbpage = 2;
$_page = (isset($_GET['page']) ? $_GET['page'] : 1);
$debut = (($_page - 1) *$nbpage);
$nbartparpage = ceil($nbarticles/$nbpage);
$select_all_post = "SELECT id, titre, texte, DATE_FORMAT(date, '%d/%m/%Y') as date_fr FROM `articles` WHERE publie = 1 LIMIT $debut,$nbpage ";

echo $select_all_post;

?>
