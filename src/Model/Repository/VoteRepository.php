<?php

namespace src\Model\Repository;
use PDO;
use src\Model\Entity\Utilisateur;
use src\Model\Entity\Election;
class VoteRepository extends Repository
{
    private PDO $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    function create($entity): bool
    {
        // TODO: Implement create() method.
        return false;

    }

    function update($entity): bool
    {
        // TODO: Implement update() method.
        return false;

    }

    function delete($entity): bool
    {
        // TODO: Implement delete() method.
        return false;

    }

    function getAll(): array
    {
        // TODO: Implement getAll() method.
        return false;

    }

    function getByID(int $id): array
    {
        // TODO: Implement getByID() method.
        return false;

    }
}