<?php

namespace PetApp\Data;

use PetApp\Toy;
use PetApp\ToyRepositoryInterface;

class SQLLiteToyRepository implements ToyRepositoryInterface
{
    private \PDO $connection;

    function __construct()
    {
        $this->connection = ConnectionFactory::create();
    }

    function readToys(): array
    {
        $query = 'SELECT * FROM Toys';

        $statement = $this->connection->prepare($query);

        $statement->execute();

        $fetchingReadToys = $statement->fetchAll(\PDO::FETCH_ASSOC);

        $toys = [];

        foreach($fetchingReadToys as $toy) {
            $toys[] = new Toy(
                $toy['name'],
                $toy['color'],
                $toy['price'],
                $toy['noisy'],
            );
        }
        return $toys;
    }

    function getToyByName(string $name): ?Toy
    {
        // TODO: Implement getToyByName() method.
    }

    function listFavoriteToy(): array
    {
        // TODO: Implement listFavoriteToy() method.
    }
}