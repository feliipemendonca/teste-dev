<?php

namespace App\Services;

use App\Repository\Interfaces\ContactRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ContactService
{

    public function __construct(
        private ContactRepositoryInterface $contactRepositoryInterface
    ) {}

    public function getAll()
    {
        $items = $this->contactRepositoryInterface->all();
        return $items;
    }

    public function find(int $id)
    {
        $item = $this->contactRepositoryInterface->find($id);
        return $item;
    }

    public function store(array $attributes)
    {
        return $this->contactRepositoryInterface->create($attributes);
    }

    public function update(Model $model, array $attributes)
    {
        return $this->contactRepositoryInterface->update($model, $attributes);
    }

    public function destroy(Model $model)
    {
        return $this->contactRepositoryInterface->delete($model);
    }
}
