<?php
class produit
{
    public $id_produit;
    public $reference;
    public $designation;
    public $prix;
    public $image;
    public $id_categorie;

    public function __construct($id_produit, $reference, $designation, $prix, $image, $id_categorie)
    {
        $this->id_produit = $id_produit;
        $this->reference = $reference;
        $this->designation = $designation;
        $this->prix = $prix;
        $this->image = $image;
        $this->id_categorie = $id_categorie;
    }
}