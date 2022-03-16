<?php

class Sport implements ISportCollectif, ISport
{
    protected $nomSport;
    protected $nbJoueur;

    /**
     * @param $nomSport
     * @param $nbJoueur
     */
    public function __construct(String $nomSport, int $nbJoueur)
    {
        $this->nomSport = $nomSport;
        $this->nbJoueur = $nbJoueur;
    }

    public function getNbJoueurs(): ?int
    {
        return $this->nbJoueur;
    }

    public function getNomSport(): ?string
    {
        return $this->nomSport;
    }

    public function getDescription(): ?string
    {
        return "Nom:" . $this->getNomSport() . " Nb:" . $this->getNbJoueurs();
    }
}