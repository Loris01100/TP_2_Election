<?php

namespace app\Model\Repository;

use app\Model\Entity;
use PDO;

class UtilisateurRepository extends Repository
{

    private \PDO $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    function create($entity): bool
    {

        return false;

    }

    function update($entity): bool
    {

        return false;

    }

    function delete($entity): bool
    {

        return false;

    }

    function getAll(): array
    {
        $groupeDAO = new GroupeRepository($this->pdo);
        $query = "SELECT * FROM Utilisateur;";
        $statement = $this->pdo->prepare($query);
        $statement->execute();

        $uti = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $myGroupe = $groupeDAO->getByID($row['idGroupe']);
            $uti[] = new entity\Utilisateur(
                $row['idUtilisateur'],
                $row['nomUtilisateur'],
                $row['prenomUtilisateur'],
                $myGroupe);
        }
        return $uti;
    }

    public function getByID(int $id): object
    {
        $groupeDAO = new GroupeRepository($this->pdo);
        $query = 'Select * from Utilisateur where idUtilisateur=:idUser';
        $queryPrep = $this->pdo->prepare($query);
        $queryPrep->execute([':idUser' => $id]);

        $row = $queryPrep->fetch(\PDO::FETCH_ASSOC);
        if ($row)
        {
            $monGroupe = new entity\Groupe($row['idGroupe'] , $groupeDAO->getByID($row['idGroupe'])->getLibelleGroupe());
            $monUser = new entity\Utilisateur(
                $row['idUtilisateur'],
                $row['nomUtilisateur'],
                $row['prenomUtilisateur'],
                $monGroupe
            );
        }
        return $monUser;
    }

    public function getAllCandidatsByGroupId(int $idGroupe): array
    {
        $query = "SELECT * FROM utilisateur WHERE idGroupe = :idGroupe";
        $statement = $this->pdo->prepare($query);
        $statement->bindValue(':idGroupe', $idGroupe, \PDO::PARAM_INT);
        $statement->execute();

        $candidats = [];
        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $candidats[] = new Utilisateur(
                $row['idUtilisateur'],
                $row['nomUtilisateur'],
                $row['prenomUtilisateur'],
                $row['idGroupe']
            );
        }

        return $candidats;
    }
}