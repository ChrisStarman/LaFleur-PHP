<?php

class connexionbdd
{
    const SERVER = "mysql:host=localhost:8888; dbname=baselafleur1; charset=utf8";
    const LOGIN = "root";
    const MDP = "root";
    private $bdd;
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
            exit("Une erreur est survenue :" . $e->getMessage());
        }
        return $categories;
    }

    public function __destruct()
    {
        $this->bdd = null;
    }
}