<?php

namespace Src\Repositories;

use Src\Database\QueryBuilder;
use Src\Repositories\Contracts\RepositoryInterface;

class MySqlPostRepository extends MySqlBaseRepository implements RepositoryInterface  {

    public function get() {
        // $query = $this->connection->prepare("SELECT * FROM posts");
        // $query->execute();
        // return $query->fetchAll();

        return QueryBuilder::table('posts')
            ->select(['id', 'title', 'description'])
            ->get();
    }

    public function find(int $id) {
        $query = $this->connection->prepare("SELECT * FROM posts WHERE id = :id");
        
        $query->execute(['id' => $id]);

        return $query->fetchObject();
    }


    public function add(array $values) {

        return QueryBuilder::table('posts')->create([
            'title' => $values['title'],
            'description' => $values['description'],
            'content' => $values['content']
        ]);

    }

}