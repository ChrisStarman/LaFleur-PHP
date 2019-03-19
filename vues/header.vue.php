<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href=<?php if (isset($index)) {
    echo "public/styles/style.css";
} else {
    echo "../public/styles/style.css";
}?> />
    <title>Société LaFleur</title>
</head>

<header>
    <h1>Société LaFleur</h1>
    <a href=<?php if (isset($index)) {
    echo "index.php";
} else {
    echo "../index.php";
}?>><img src=<?php if (isset($index)) {
    echo "public/logo_lafleur.png";
} else {
    echo "../public/logo_lafleur.png";
}?> class="logo" alt="logo LaFleur" /></a>
    <nav>
        <?php include "menu.vue.php"?>
    </nav>
</header>