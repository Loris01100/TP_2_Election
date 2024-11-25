<?php

namespace src\Model\Entity;

class Election
{
    protected int $idElection;
    protected Groupe $idGroupe;
    protected EtatElection $idEtatElection;

    /**
     * @param int $idElection
     * @param Groupe $idGroupe
     * @param EtatElection $idEtatElection
     */
    public function __construct(int $idElection, Groupe $idGroupe, EtatElection $idEtatElection)
    {
        $this->idElection = $idElection;
        $this->idGroupe = $idGroupe;
        $this->idEtatElection = $idEtatElection;
    }


    public function getIdElection(): int
    {
        return $this->idElection;
    }

    public function setIdElection(int $idElection): void
    {
        $this->idElection = $idElection;
    }

    public function getIdEtatElection(): EtatElection
    {
        return $this->idEtatElection;
    }

    public function setIdEtatElection(EtatElection $idEtatElection): void
    {
        $this->idEtatElection = $idEtatElection;
    }

    public function getIdGroupe(): Groupe
    {
        return $this->idGroupe;
    }

    public function setIdGroupe(Groupe $idGroupe): void
    {
        $this->idGroupe = $idGroupe;
    }

}