<?php

namespace Src\Repositories\Contracts;


interface RepositoryInterface {

    public function get();

    public function find(int $id);

    public function add(array $values);

}