<?php

namespace app\Model\Repository;

use app\Model\Entity;

use app\Model\Entity\EtatElection;
use PDO;
class EtatElectionRepository extends Repository
{
    private PDO $bdd;

    public function __construct(\PDO $pdo)
    {
        $this->bdd = $pdo;
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

        return false;

    }

    function getByID(int $id) : object
    {
        return false;

    }
    public function getEtatById(int $id): ?EtatElection
    {
        $query = "SELECT * FROM EtatElection WHERE idEtat = :idEtatElection";
        $statement = $this->bdd->prepare($query);
        $statement->bindValue(':idEtatElection', $id);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);
        if ($row !=null) {
            return new EtatElection(
                $row['idEtatElection'],
                $row['valeur'],
                $row['ordre'],
            );
        }
        return null;
    }
}