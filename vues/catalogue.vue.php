<h1><?php echo $libelleCategorie; ?></h1>

<?php foreach ($produitsParCategorie as $produit) {
    echo
    "<section>
            <section id='top'>
            <h2>" . $produit->designation . "</h2>
            <figure>
            <img src='../public/" . $produit->image . "' alt='" . $produit->designation . "' class='page_produit' />
            <figcaption>" . $produit->designation . "</figcaption>
            <p class='text'>
            Description
            <br />
            <br /> Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un
                imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de
                texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique,
                sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de
                feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des
                applications de mise en page de texte, comme Aldus PageMaker.
                <br />
                <br /> Référence: " . $produit->reference . "
                <br />
                <br />
                <br /> Prix : " . $produit->prix . "€
            </p>
        </figure>
    </section>";
}