<?php

namespace app\Model\Repository;
use PDO;
use app\Model\Entity\Utilisateur;
use app\Model\Entity\Election;
class VoteRepository extends Repository
{
    private PDO $pdo;

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

        return false;

    }

    function getByID(int $id) : object
    {

        return false;

    }
}