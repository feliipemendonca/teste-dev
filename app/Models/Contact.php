<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'age'
    ];

    public static function boot()
    {
        parent::boot();

        static::deleting(
            function ($model) {
                $model->address->delete();
            }
        );
    }

    /**
     * Get the address that owns the User
     *
     * @return MorphOne
     */
    public function address()
    {
        return $this->morphOne(Address::class, 'addressable');
    }
}
