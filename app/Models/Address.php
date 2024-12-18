<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'zip',
        'address',
        'complement',
        'number',
        'district',
        'city',
        'state'
    ];

    public function addressable()
    {
        return $this->morphTo();
    }
}
