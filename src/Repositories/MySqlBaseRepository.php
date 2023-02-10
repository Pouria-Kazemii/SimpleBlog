<?php

namespace Src\Repositories;

use Src\Database\Connection;
use Src\Database\QueryBuilder;

class MySqlBaseRepository {
    
    protected $connection;
    protected $builder;

    public function __construct()
    {
        // $this->builder = new QueryBuilder;
        // $this->connection = Connection::getInstance()
        // ->getConnection();
    }
}