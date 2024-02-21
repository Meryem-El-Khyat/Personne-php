<?php
class Vacataire extends Personne {
    private $diplome; // Le diplôme du vacataire

    // Constructeur de la classe Vacataire
    public function __construct($nom, $numero, $prenom, $heuresup, $salaireshoraire, $diplome) {
        parent::__construct($nom, $numero, $prenom, $heuresup, $salaireshoraire);
        $this->diplome = $diplome;
    }

    // Méthode pour calculer le salaire du vacataire
    public function calculSalaire() {
        return $this->heuresup * $this->salaireshoraire;
    }
}
?>