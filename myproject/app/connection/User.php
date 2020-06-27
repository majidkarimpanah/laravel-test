<?php
namespace App\connection;
class User{
    private $connection;

    public function __construct(DbConnection $connection)
    {
        $this->connection=$connection;
        var_dump('connection=>',$this->connection);
    }
}