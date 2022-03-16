<?php

class SportBallon extends Sport implements ITerrain
{
    private $largeur;
    private $longueur;

    public function __construct(string $nomSport, int $nbJoueur, int $largeur, int $longueur)
    {
        parent::__construct($nomSport, $nbJoueur);
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }

    public function getLargeur(): ?int
    {
        return $this->largeur;
    }

    public function getLongueur(): ?int
    {
        return $this->longueur;
    }

    public function getDescription(): ?string
    {
        return "Nom:" . $this->getNomSport() . " Nb:" . $this->getNbJoueurs(). " Longueur:" . $this->getLongueur() . " Largeur:" . $this->getLargeur();
    }
}