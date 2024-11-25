<?php

namespace src\Model\Repository;

USE PDO;
use src\Model\Entity\Groupe;

class GroupeRepository extends Repository

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
        return false;
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