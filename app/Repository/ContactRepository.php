<?php

namespace App\Repository;

use App\Models\Contact;
use App\Repository\Interfaces\ContactRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ContactRepository implements ContactRepositoryInterface
{

    public function __construct(protected Contact $model) {}

    public function all()
    {
        return $this->model->orderBy('id', 'desc');
    }

    public function find($id): Contact
    {
        return $this->model->find($id);
    }

    public function create(array $attributes): Contact
    {
        DB::beginTransaction();

        try {
            $model = $this->model->create($attributes);
            $model->address()->create($attributes);

            DB::commit();
            return $model;
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th);
            throw $th;
        }
    }

    public function update(Model $model, array $attributes): Contact
    {
        DB::beginTransaction();

        try {
            $modelAttributes = Arr::only($attributes, $model->getFillable());
            $model->update($modelAttributes);

            if ($model->address) {
                $addressAttributes = Arr::only($attributes, $model->address->getFillable());
                $model->address()->update($addressAttributes);
            }

            DB::commit();
            return $model;
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th);
            throw $th;
        }
    }

    public function delete(Model $model): bool
    {
        DB::beginTransaction();

        try {
            $model->delete();
            DB::commit();
            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error($th);
            throw $th;
        }
    }
}
