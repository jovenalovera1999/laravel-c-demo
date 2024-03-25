<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Gender::factory()->create([
            'gender' => 'Male'
        ]);

        \App\Models\Gender::factory()->create([
            'gender' => 'Female'
        ]);

        \App\Models\User::factory(100)->create();

        \App\Models\User::factory()->create([
            'first_name' => 'Joven Joshua',
            'middle_name' => 'Celiz',
            'last_name' => 'Alovera',
            'suffix_name' => null,
            'birth_date' => '1999-10-25',
            'gender_id' => 1,
            'address' => 'San Roque St. Roxas City',
            'contact_number' => '09434071429',
            'email_address' => 'joven@gmail.com',
            'username' => 'joven99',
            'password' => bcrypt('joven99')
        ]);
    }
}
