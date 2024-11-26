<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::factory(100)->create()->each(function ($contact) {
            $contact->address()->create(
                [
                    'zip' => '123',
                    'address' => 'address',
                    'complement' => 'complement',
                    'number' => '123',
                    'district' => 'district',
                    'city' => 'city',
                    'state' => 'state',
                ]
            );
        });
    }
}
