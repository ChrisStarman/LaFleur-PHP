<?php if (isset($index)) {
    include './pages/menu.php';
} else {
    include 'menu.php';
}?>

<ul class="menu_header">
    <li><a href=<?php if (isset($index)) {
    echo "index.php";
} else {
    echo "../index.php";
}?> class="menu_header">Accueil</a></li>
    <?php
foreach ($menu as $key => $value) {
    if (isset($index)) {
        echo "<li><a href='./pages/catalogue.php?categories=" . $key . "' class='menu_header'>" . $value . "</a></li>";
    } else {
        echo "<li><a href='catalogue.php?categories=" . $key . "' class='menu_header'>" . $value . "</a></li>";
    }
}
?>
    <li><a href=<?php if (isset($index)) {
    echo "./pages/commande.php";
} else {
    echo "commande.php";
}?> class="menu_header">Commande</a></li>
    <li><a href=<?php if (isset($index)) {
    echo "./pages/news.php";
} else {
    echo "news.php";
}?> class="menu_header">News</a></li>
    <li><a href=<?php if (isset($index)) {
    echo "./pages/contact.php";
} else {
    echo "contact.php";
}?> class="menu_header">Contact</a></li>
</ul>