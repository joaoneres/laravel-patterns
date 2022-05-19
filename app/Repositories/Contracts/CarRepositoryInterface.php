<?php

namespace App\Repositories\Contracts;

interface CarRepositoryInterface
{
    public function all();
    public function store(Array $data);
    public function findById(Int $id);
    public function update(Int $id, Array $data);
    public function delete(Int $id);
}
