<?php

namespace app\Model\Entity;

class Groupe
{
    protected int $idGroupe;
    protected string $libelleGroupe;

    /**
     * @param int $idGroupe
     * @param string $libelleGroupe
     */
    public function __construct(int $idGroupe, string $libelleGroupe)
    {
        $this->idGroupe = $idGroupe;
        $this->libelleGroupe = $libelleGroupe;
    }


    public function getIdGroupe(): int
    {
        return $this->idGroupe;
    }

    public function setIdGroupe(int $idGroupe): void
    {
        $this->idGroupe = $idGroupe;
    }

    public function getLibelleGroupe(): string
    {
        return $this->libelleGroupe;
    }

    public function setLibelleGroupe(string $libelleGroupe): void
    {
        $this->libelleGroupe = $libelleGroupe;
    }

    public function getId()
    {

    }


}