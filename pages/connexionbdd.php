<?php

include_once "parametres.inc.php";
include_once "classes.php";

class connexionbdd
{
    public function __construct()
    {
        try {
            $this->bdd = new PDO(SERVER, LOGIN, MDP);
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            exit("Une erreur est survenue : " . $e->getMessage());
        }
    }

    public function listerCategories()
    {
        $categories = array();
        try {
            $requete = $this->bdd->prepare('SELECT * FROM categories');
            $requete->execute();
            $enregistrements = $requete->fetchAll();

            foreach ($enregistrements as $uneCategorie) {
                $categories[$uneCategorie['code']] = $uneCategorie['libelle'];
            }
        } catch (PDOException $e) {
            exit("Une erreur est survenue : " . $e->getMessage());
        }
        return $categories;
    }

    public function produitsParCategorie($categorieRecherchee)
    {
        $produitsTrouves = array();
        try {
            $requete = $this->bdd->prepare('SELECT * FROM produits JOIN categories ON produits.id_categorie=categories.id_categorie WHERE code=:categorie');
            $requete->execute(['categorie' => $categorieRecherchee]);
            $enregistrements = $requete->fetchAll();

            foreach ($enregistrements as $unProduit) {
                $produitLu = new produit($unProduit['id_produit'], $unProduit['reference'], $unProduit['designation'], $unProduit['prix'], $unProduit['image'], $unProduit['id_categorie']);
                $produitsTrouves[$unProduit['id_produit']] = $produitLu;
            }
        } catch (PDOException $e) {
            exit("Une erreur est survenue : " . $e->getMessage());
        }
        return $produitsTrouves;
    }

    public function __destruct()
    {
        $this->bdd = null;
    }
}