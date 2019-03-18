<?php include "./pages/menu.php"?>

<ul class="menu_header">
    <li><a href="./page/index.php" class="menu_header">Accueil</a></li>
    <?php
foreach ($menu as $key => $value) {
    echo "<li><a href='./pages/catalogue.php?categories=" . $key . "' class='menu_header'>" . $value . "</a></li>";
}
?>
    <li><a href="./pages/commande.html" class="menu_header">Commande</a></li>
    <li><a href="./pages/news.html" class="menu_header">News</a></li>
    <li><a href="./pages/contact.html" class="menu_header">Contact</a></li>
</ul>