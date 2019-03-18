<?php
include "connexionbdd.php";

$bdd = new connexionbdd();
$menu = $bdd->listerCategories();

include "../vues/menu.vue.php";
