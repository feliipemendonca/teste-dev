<?php

namespace App\Repository\Interfaces;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface ContactRepositoryInterface
{
    public function all();
    public function find(int $id): ?Contact;
    public function create(array $data): Contact;
    public function update(Model $model, array $data): Contact;
    public function delete(Model $model): bool;
}
