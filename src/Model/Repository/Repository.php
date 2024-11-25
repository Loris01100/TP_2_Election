<?php

namespace src\Model\Repository;

abstract class Repository
{
    abstract function create($entity) : bool;
    abstract function update($entity) : bool;
    abstract function delete($entity) : bool;
    abstract function getAll() : array;
    abstract function getByID(int $id) : array;
}