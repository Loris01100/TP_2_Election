<?php

namespace app\Model\Entity;

class EtatElection
{
    protected int $idEtatElection;

    protected string $valeur;
    protected int $ordre;

    /**
     * @param int $idEtatElection
     * @param string $valeur
     * @param int $ordre
     */
    public function __construct(int $idEtatElection, string $valeur, int $ordre)
    {
        $this->idEtatElection = $idEtatElection;
        $this->valeur = $valeur;
        $this->ordre = $ordre;
    }

    public function getValeur(): string
    {
        return $this->valeur;
    }

    public function setValeur(string $valeur): void
    {
        $this->valeur = $valeur;
    }

    public function getIdEtatElection(): int
    {
        return $this->idEtatElection;
    }

    public function setIdEtatElection(int $idEtatElection): void
    {
        $this->idEtatElection = $idEtatElection;
    }

    public function getOrdre(): int
    {
        return $this->ordre;
    }

    public function setOrdre(int $ordre): void
    {
        $this->ordre = $ordre;
    }


}