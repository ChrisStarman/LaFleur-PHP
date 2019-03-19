<?php

$categorieRecherchee = $_GET["categories"];
include_once "connexionbdd.php";
include_once "../vues/header.vue.php";
$produitsParCategorie = $bdd->produitsParCategorie($categorieRecherchee);
$libelleCategorie = $bdd->libelleCategorie($categorieRecherchee);
include_once "../vues/catalogue.vue.php";
include "../vues/footer.vue.php";