<?php

namespace app\Model\Repository;

USE PDO;
use app\Model\Entity;

class GroupeRepository extends Repository

{
    private \PDO $bdd;

    public function __construct(\PDO $bdd)
    {
        $this->bdd = $bdd;
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

        $query = "SELECT * FROM Groupe;";
        $statement = $this->bdd->prepare($query);
        $statement->execute();

        $groupes = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $groupes[] = new entity\Groupe(
                $row['idGroupe'],
                $row['libelleGroupe']
            );
        }

        return $groupes;

    }

    function getByID(int $id) : object
    {
        $groupeById = new entity\Groupe($id, '');
        $query = 'Select * from groupe where idGroupe=:idGroupe';
        $queryPrep = $this->bdd->prepare($query);
        $res = $queryPrep->execute([':idGroupe' => $id]);
        if ($res)
        {
            while ($row = $queryPrep->fetch(\PDO::FETCH_ASSOC))
            {
                $groupeById = new entity\Groupe($id ,$row['libelleGroupe']);
            }
        }
        return $groupeById;

    }

    public function getGroupById(int $id): ?Entity\Groupe
    {
        $query = "SELECT * FROM Groupe WHERE idGroupe = :idGroupe";
        $statement = $this->bdd->prepare($query);
        $statement->bindValue(':idGroupe', $id);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Entity\Groupe(
                $row['idGroupe'],
                $row['libelleGroupe']
            );
        }
        return null;
    }

}