<?php
abstract class Personne {
    protected $numero; // Le numéro de la personne
    protected $nom; // Le nom de la personne
    protected $prenom; // Le prénom de la personne
    protected $heuresup; // Le nombre d'heures supplémentaires travaillées
    protected $salaireshoraire; // Le salaire horaire de la personne

    // Constructeur de la classe Personne
    public function __construct($nom, $numero, $prenom, $heuresup, $salaireshoraire) {
        $this->nom = $nom;
        $this->numero = $numero;
        $this->prenom = $prenom;
        $this->heuresup = $heuresup;
        $this->salaireshoraire = $salaireshoraire;
    }

    abstract public function calculSalaire(); // Méthode abstraite pour calculer le salaire

    // Méthode magique pour obtenir une représentation textuelle de l'objet
    public function __toString() {
        return $this->numero . ' ' . $this->nom . ' ' . $this->prenom;
    }

    // Méthode magique pour obtenir la valeur d'une propriété
    public function __get($attr) {
        if (property_exists($this, $attr))
            return $this->$attr;
    }
}

?>