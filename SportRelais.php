<?php

class SportRelais extends Sport
{
    private $distance;

    /**
     * @param $distance
     */
    public function __construct(String $nomSport, int $distance, int $nbJoueur)
    {
        parent::__construct($nomSport, $nbJoueur);
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getDistance(): ?int
    {
        return $this->distance;
    }

    public function getDescription(): ?string
    {
        return "Nom:" . $this->getNomSport() . " Nb:" . $this->getNbJoueurs() . " Distance:" . $this->getDistance();
    }
}