<!DOCTYPE html>
<html lang="fr">

<?php
include_once "../vues/entete.vue.php";
include "../vues/footer.vue.php";
include "../pages/menu.php";
include "../vues/index.vue.php";
?>

<body>
    <header>
        <h1>Société LaFleur</h1>
        <a href="index.html"><img src="public/logo_lafleur.png" id="logo" alt="logo LaFleur" /></a>
        <nav>
            <ul class="menu_header">
                <li><a href="index.html" class="menu_header">Accueil</a></li>
                <li><a href="pages/bulbes.html" class="menu_header">Bulbes</a></li>
                <li><a href="pages/rosiers.html" class="menu_header">Rosiers</a></li>
                <li><a href="pages/massifs.html" class="menu_header">Plantes à massif</a></li>
                <li><a href="pages/commande.html" class="menu_header">Commande</a></li>
                <li><a href="pages/news.html" class="menu_header">News</a></li>
                <li><a href="pages/contact.html" class="menu_header">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="parallax"></section>

    <section id="news">
        <article>
            <h2>News 1 :</h2>
            <p class="overflow">Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae
                dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed
                splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones
                sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur
                et crebros.</p><a href="pages/news/news1.html">[Lire l'article]</a>
        </article>
        <article>
            <h2>News 2 :</h2>
            <p class="overflow">Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae
                dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed
                splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones
                sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur
                et crebros.</p><a href="pages/news/news2.html">[Lire l'article]</a>
        </article>
        <article>
            <h2>News 3 :</h2>
            <p class="overflow">Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae
                dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed
                splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones
                sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur
                et crebros.</p><a href="pages/news/news3.html">[Lire l'article]</a>
        </article>
    </section>

    <section id="produits">
        <div class="produit">
            <h2>Produit du moment 1</h2>
            <a href="pages/bulbes.html"><img src="public/bulbes_begonia.jpg" alt="Bulbes Begonia"
                    class="image_produit" /></a>
        </div>
        <div class="produit">
            <h2>Produit du moment 2</h2>
            <a href="pages/bulbes.html"><img src="public/bulbes_dahlia.jpg" alt="Bulbes Dahlia"
                    class="image_produit" /></a>
        </div>
        <div class="produit">
            <h2>Produit du moment 3</h2>
            <a href="pages/bulbes.html"><img src="public/bulbes_glaieul.jpg" alt="Bulbes Glaieul"
                    class="image_produit" /></a>
        </div>
    </section>

    <?php
include_once 'vues/footer.php';
?>

</body>

</html>