<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'zip' => $this->address->zip,
            'address' => $this->address->address,
            'district' => $this->address->district,
            'city' => $this->address->city,
            'number' => $this->address->number,
            'state' => $this->address->state,
            'complement' => $this->address->complement,
        ];
    }
}
