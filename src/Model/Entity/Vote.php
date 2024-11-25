<?php

namespace src\Model\Entity;

class Vote
{
    protected int $idVote;
    protected Utilisateur $idCandidat;
    protected Utilisateur $idVotant;
    protected int $numTour;
    protected Election $idElection;

    /**
     * @param int $idVote
     * @param Utilisateur $idCandidat
     * @param Utilisateur $idVotant
     * @param int $numTour
     * @param Election $idElection
     */
    public function __construct(int $idVote, Utilisateur $idCandidat, Utilisateur $idVotant, int $numTour, Election $idElection)
    {
        $this->idVote = $idVote;
        $this->idCandidat = $idCandidat;
        $this->idVotant = $idVotant;
        $this->numTour = $numTour;
        $this->idElection = $idElection;
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
        return $this->idCandidat;
    }

    public function setIdCandidat(Utilisateur $idCandidat): void
    {
        $this->idCandidat = $idCandidat;
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
        return $this->idVotant;
    }

    public function setIdVotant(Utilisateur $idVotant): void
    {
        $this->idVotant = $idVotant;
    }

    public function getIdElection(): Election
    {
        return $this->idElection;
    }

    public function setIdElection(Election $idElection): void
    {
        $this->idElection = $idElection;
    }


}