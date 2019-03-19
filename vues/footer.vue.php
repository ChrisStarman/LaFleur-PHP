<footer>
    <section class="footerflex">
        <a href="https://www.facebook.com/" target="_blank"><img src=<?php if (isset($index)) {
    echo "public/lien_facebook.png";
} else {
    echo "../public/lien_facebook.png";
}?> class="logo_social" alt="facebook" /></a>
        <a href="https://twitter.com/" target="_blank"><img src=<?php if (isset($index)) {
    echo "public/lien_twitter.png";
} else {
    echo "../public/lien_twitter.png";
}?> class="logo_social" alt="twitter" /></a>
        <a href="https://www.pinterest.fr/" target="_blank"><img src=<?php if (isset($index)) {
    echo "public/lien_pinterest.png";
} else {
    echo "../public/lien_pinterest.png";
}?> class="logo_social" alt="pinterest" /></a>
        <a href="https://www.instagram.com/?hl=fr" target="_blank"><img src=<?php if (isset($index)) {
    echo "public/lien_instagram.png";
} else {
    echo "../public/lien_instagram.png";
}?> class="logo_social" alt="instagram" /></a>
    </section>
    <section class="footerflex">
        <ul>
            <li><a href=<?php if (isset($index)) {
    echo "pages/conditions.php";
} else {
    echo "conditions.php";
}?> class="menu_footer">Conditions de vente</a></li>
            <li><a href=<?php if (isset($index)) {
    echo "pages/plan_du_site.php";
} else {
    echo "plan_du_site.php";
}?> class="menu_footer">Plan du site</a></li>
            <li><a href=<?php if (isset($index)) {
    echo "pages/faq.php";
} else {
    echo "faq.php";
}?> class="menu_footer">FAQ</a></li>
        </ul>
    </section>
</footer>

</body>

</html>