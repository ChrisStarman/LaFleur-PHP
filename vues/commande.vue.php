<form method="post" action="mailto:abjeankanchan@gmail.com">
    <h1>Formulaire commande</h1>

    <fieldset>
        <label for="produits">Produit : </label>
        <select name="produits">
            <option value="" disabled selected>Choisissez votre produit</option>
            <optgroup label="Bulbes">
                <option value="Bégonias">Bégonias</option>
                <option value="Dahlias">Dahlias</option>
                <option value="Glaieuls">Glaieuls</option>
            </optgroup>

            <optgroup label="Massifs">
                <option value="Marguerites">Marguerites</option>
                <option value="Pensées">Pensées</option>
                <option value="Varié">Varié</option>
            </optgroup>

            <optgroup label="Rosiers">
                <option value="Grandesfleurs">Grandes fleurs</option>
                <option value="Variétéparfum">Variété à parfum</option>
                <option value="Rosierarbuste">Rosier arbuste</option>
            </optgroup>
        </select>

        <select name="quantité">
            <option value="" disabled selected>Choisissez la quantité</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <br />
        <br />

        <label for="nom">Nom : </label>
        <input type="text" id="adresse" name="nom">
        <br />
        <br />

        <label for="prenom">Prénom : </label>
        <input type="text" id="adresse" name="prenom">
        <br />
        <br />

        <label for="code_client"> Code client : </label>
        <input type="text" id="codeclient" name="codeclient">
        <br />
        <br />

        <label for="code postal"> Code postal : </label>
        <input type="text" id="adresse" name="code postal">
        <br />
        <br />

        <label for="ville"> Ville : </label>
        <input type="text" id="adresse" name="ville">
        <br />
        <br />

        <label for="adresse"> Adresse de livraison : </label>
        <input type="text" id="adresse" name="adresse">
        <br />
        <br />

        <button type="submit" name="validerlacommande" id="envoyer">Valider la commande</button>
        <button type="reset" name="reset" id="raz">Effacer</button>
        <br />
        <br />
        <a href="condition.html" target="_blank">Conditions générales de vente</a>
    </fieldset>
</form>