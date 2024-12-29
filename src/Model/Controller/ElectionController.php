<?php

namespace app\Model\Controller;
require_once 'vendor/autoload.php';
use app\Model\Entity\BDConnexion;
use app\Model\Entity\Election;
use app\Model\Entity\Groupe;
use app\Model\Repository\ElectionRepository;
use app\Model\Repository\GroupeRepository;
use app\Model\Repository\UtilisateurRepository;

class ElectionController
{
    private \PDO $pdo;
    function __construct()
    {
        $this->pdo = BDConnexion::getOrCreateInstance()->getPdo();
    }

    function InitializeElection(Groupe $groupe):void
    {
        $repo = new ElectionRepository($this->pdo);
        $repoCandidat = new UtilisateurRepository($this->pdo);
        $res = $repo->createElection($groupe);
        $state = $res->getIdEtatElection();
        $candidatList = $repoCandidat->getAllCandidatsByGroupId($groupe->getIdGroupe());

        require_once "templates/pages/Election.php";
    }


    function GetElectionByIdGroupeForDisplayy(int $idGroupe):void
    {
        require_once "";
        $repo = new ElectionRepository($this->pdo);
        $repoCandidat = new UtilisateurRepository($this->pdo);
        $repoGroupe = new GroupeRepository($this->pdo);

        $groupe = $repoGroupe->getGroupById($idGroupe);

        $res = $repo->getElectionByIdGroupe($idGroupe);

        $idElection = $groupe->getId();
        $state = $repo->getStateElection((int)$idElection);

        $candidatList = $repoCandidat->getAllCandidatsByGroupId($groupe->getIdGroupe());
        require_once "templates/pages/Election.php";
    }

    function verifIfElectionForThisGroupAlreadyExists(int $idGroupe):bool
    {
        $verif = false;
        $repo = new ElectionRepository($this->pdo);
        $election = $repo->getElectionByIdGroupe($idGroupe);
        if ($election != null) {
            $verif = true;
        }
        return $verif;
    }

    function GetElectionByIdGroupe(int $idGroupe): array
    {
        $repo = new ElectionRepository($this->pdo);
        $election = $repo->getElectionByIdGroupe($idGroupe);
        return $election;
    }
}