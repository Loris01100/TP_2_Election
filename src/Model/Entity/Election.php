<?php

namespace app\Model\Entity;

class Election
{
    protected int $idElection;
    protected Groupe $iGroupe;
    protected EtatElection $iEtatElection;

    /**
     * @param int $idElection
     * @param Groupe $iGroupe
     * @param EtatElection $iEtatElection
     */
    public function __construct(int $idElection, Groupe $iGroupe, EtatElection $iEtatElection)
    {
        $this->idElection = $idElection;
        $this->iGroupe = $iGroupe;
        $this->iEtatElection = $iEtatElection;
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
        return $this->iEtatElection;
    }

    public function setIdEtatElection(EtatElection $iEtatElection): void
    {
        $this->iEtatElection = $iEtatElection;
    }

    public function getIdGroupe(): Groupe
    {
        return $this->iGroupe;
    }

    public function setIdGroupe(Groupe $iGroupe): void
    {
        $this->iGroupe = $iGroupe;
    }

}