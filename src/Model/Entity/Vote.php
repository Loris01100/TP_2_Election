<?php

namespace app\Model\Entity;

class Vote
{
    protected int $idVote;
    protected Utilisateur $iCandidat;
    protected Utilisateur $iVotant;
    protected int $numTour;
    protected Election $iElection;

    /**
     * @param int $idVote
     * @param Utilisateur $iCandidat
     * @param Utilisateur $iVotant
     * @param int $numTour
     * @param Election $iElection
     */
    public function __construct(int $idVote, Utilisateur $iCandidat, Utilisateur $iVotant, int $numTour, Election $iElection)
    {
        $this->idVote = $idVote;
        $this->iCandidat = $iCandidat;
        $this->iVotant = $iVotant;
        $this->numTour = $numTour;
        $this->iElection = $iElection;
    }


    public function getIdVote(): int
    {
        return $this->idVote;
    }

    public function setIdVote(int $idVote): void
    {
        $this->idVote = $idVote;
    }

    public function getIdCandidat(): Utilisateur
    {
        return $this->iCandidat;
    }

    public function setICandidat(Utilisateur $iCandidat): void
    {
        $this->iCandidat = $iCandidat;
    }

    public function getNumTour(): int
    {
        return $this->numTour;
    }

    public function setNumTour(int $numTour): void
    {
        $this->numTour = $numTour;
    }

    public function getIdVotant(): Utilisateur
    {
        return $this->iVotant;
    }

    public function setIVotant(Utilisateur $iVotant): void
    {
        $this->iVotant = $iVotant;
    }

    public function getIdElection(): Election
    {
        return $this->idElection;
    }

    public function setIElection(Election $iElection): void
    {
        $this->iElection = $iElection;
    }


}