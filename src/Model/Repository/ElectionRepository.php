<?php

namespace app\Model\Repository;

use app\Model\Entity;

use app\Model\Entity\Election;
use app\Model\Entity\Groupe;
use PDO;
class ElectionRepository extends Repository
{
    private PDO $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create($entity) : bool
    {
        return false;
    }

    public function createElection(Groupe $groupe): Election {
        $sql = "INSERT INTO Election (idGroupe, idEtat) VALUES (:idGroupe, :idEtat)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':idGroupe' => $groupe->getIdGroupe(),
            ':idEtat' => 1
        ]);

        $idElection = $this->pdo->lastInsertId();

        $repoGroupe = new GroupeRepository($this->pdo);
        $groupe = $repoGroupe->getGroupById($groupe->getIdGroupe());

        $repoEtat = new EtatElectionRepository($this->pdo);
        $etatElection = $repoEtat->getEtatById(1);

        $sql = "SELECT * FROM Election WHERE idElection = :idElection";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':idElection' => $idElection]);

        $data = $stmt->fetch();

        return new Election($data['idElection'], $groupe, $etatElection);
    }



    public function getStateElection(int $id): string
    {
        $query = "SELECT idEtat, idElection FROM Election WHERE idElection = :idElection";
        $statement = $this->pdo->prepare($query);
        $statement->bindValue(':idElection', $id);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);
        return $row ? $row['idEtat'] : '';
    }

    public function getAllCandidatsById(int $id): array
    {
        $query = "SELECT * FROM Candidat WHERE idElection = :idElection";
        $statement = $this->pdo->prepare($query);
        $statement->bindValue(':idElection', $id);
        $statement->execute();

        $candidats = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $candidats[] = new Entity\Candidat(
                $row['idCandidat'],
                $row['nomCandidat'],
                $row['prenomCandidat'],
                $row['idElection']
            );
        }
        return $candidats;
    }

    public function getId(string $nomElection): int
    {
        $query = "SELECT idElection FROM Election WHERE nomElection = :nomElection";
        $statement = $this->pdo->prepare($query);
        $statement->bindValue(':nomElection', $nomElection);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);
        return $row ? $row['idElection'] : 0;
    }
    public function getElectionByIdGroupe(int $idGroupe): array
    {
        $query = "SELECT * FROM Election WHERE idGroupe = :idGroupe";
        $statement = $this->pdo->prepare($query);
        $statement->bindValue(':idGroupe', $idGroupe);
        $statement->execute();

        $elections = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $elections[] = new Entity\Election(
                $row['idElection'],
                $row['nomElection'],
                $row['dateElection'],
                $row['idGroupe']
            );
        }
        return $elections;
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

        return false;

    }

    function getByID(int $id) : object
    {
        return false;

    }
}