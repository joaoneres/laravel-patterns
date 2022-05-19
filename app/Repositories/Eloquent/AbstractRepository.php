<?php

namespace App\Repositories\Eloquent;

abstract class AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    protected function resolveModel()
    {
        return app($this->model);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function store(Array $data)
    {
        return $this->model->create($data);
    }

    public function findById(Int $id)
    {
        return $this->model->find($id);
    }

    public function update(Int $id, Array $data)
    {
        $car = $this->model->find($id);
        $car->update($data);
        return $car;
    }

    public function delete(Int $id)
    {
        $car = $this->model->find($id);
        $car->delete();
        return $car;
    }
}
