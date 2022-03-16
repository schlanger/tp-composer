<?php

class Club implements Comparable
{
    private $idClub;
    private $nomClub;
    private $nbPoints;
    private $listLesSports = [];

    public function __construct(int $idClub, string $nomClub, int $nbPoints)
    {
        $this->idClub = $idClub;
        $this->nomClub = $nomClub;
        $this->nbPoints = $nbPoints;
    }

    public function getIdClub(): ?int
    {
        return $this->idClub;
    }

    public function getNomClub(): ?string
    {
        return $this->nomClub;
    }

    public function getNbPoint(): ?int
    {
        return $this->nbPoints;
    }

    public function getLesSport(): ?array
    {
        return $this->listLesSports;
    }

    public function AjouterSport(Sport $sport)
    {
        $this->listLesSports[] = $sport;
    }

    public function compareTo(Club $o)
    {
        // TODO: Implement compareTo() method.
    }


}