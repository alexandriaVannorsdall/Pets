<?php

namespace PetApp\Data;

use PetApp\Pet;
use PetApp\PetRepositoryInterface;

class SQLLitePetRepository implements PetRepositoryInterface
{
    private \PDO $connection;

    function __construct()
    {
        $this->connection = ConnectionFactory::create();
    }

    function readPets(): array
    {
        $query = 'SELECT * FROM Pets';

        $statement = $this->connection->prepare($query);

        $statement->execute();

        $fetchingReadPets = $statement->fetchAll(\PDO::FETCH_ASSOC);

        $pets = [];

        foreach($fetchingReadPets as $pet) {
            $pets[] = new Pet(
                $pet['name'],
                $pet['type'],
                $pet['color'],
                $pet['sleepingPlace'],
                $pet['toy'],
                $pet['food']
            );
        }
        return $pets;
    }

    function writePet(Pet $pet)
    {
        $query =
            'INSERT INTO Pets(id, name, type, food, toy, sleepingPlace, color)
            VALUES (:id, :name, :type, :food, :toy, :sleepingPlace, :color)';

        $statement = $this->connection->prepare($query);

        $statement->execute([
            ':id' => time(),
            ':name' => $pet->getName(),
            ':type' => $pet->getType(),
            ':food' => $pet->getFood(),
            ':toy' => $pet->getFavoriteToy(),
            ':sleepingPlace' => $pet->getSleepingPlace(),
            ':color' => $pet->getColor(),
        ]);
    }
}