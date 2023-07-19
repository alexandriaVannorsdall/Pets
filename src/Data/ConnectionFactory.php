<?php

namespace PetApp\Data;

class ConnectionFactory
{
    static function create(): \PDO
    {
        $connection = new \PDO('sqlite:mydb.sq3');
        $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $connection;
    }
}