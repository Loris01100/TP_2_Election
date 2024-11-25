<?php

namespace src\Model\Entity;

class Utilisateur
{
    protected int $idUtilisateur;
    protected string $nomUtilisateur;
    protected string $prenomUtilisateur;

    /**
     * @param int $idUtilisateur
     * @param string $nomUtilisateur
     * @param string $prenomUtilisateur
     */
    public function __construct(int $idUtilisateur, string $nomUtilisateur, string $prenomUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
        $this->nomUtilisateur = $nomUtilisateur;
        $this->prenomUtilisateur = $prenomUtilisateur;
    }


    public function getIdUtilisateur(): int
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(int $idUtilisateur): void
    {
        $this->idUtilisateur = $idUtilisateur;
    }

    public function getNomUtilisateur(): string
    {
        return $this->nomUtilisateur;
    }

    public function setNomUtilisateur(string $nomUtilisateur): void
    {
        $this->nomUtilisateur = $nomUtilisateur;
    }

    public function getPrenomUtilisateur(): string
    {
        return $this->prenomUtilisateur;
    }

    public function setPrenomUtilisateur(string $prenomUtilisateur): void
    {
        $this->prenomUtilisateur = $prenomUtilisateur;
    }



}