<?php

namespace app\Model\Controller;

use app\Model\Repository\UtilisateurRepository;
use app\Model\Entity\BDConnexion;

class UtilisateurController
{
    private \PDO $pdo;

    public function __construct()
    {
        $this->pdo = BDConnexion::getOrCreateInstance()->getPdo();
    }

    public function afficherListeUtilisateurs(): void
    {

        $repo = new UtilisateurRepository($this->pdo);

        $utilisateurs = $repo->getAll();

        require_once 'templates/pages/utilisateur.php';
    }
}

