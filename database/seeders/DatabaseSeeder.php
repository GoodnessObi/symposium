<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Talk;
use App\Models\Conference;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    { 
        User::factory()
            ->has(Talk::factory()->count(5))
            ->create([
                'name' => 'John Doe',
                'email' => 'johndoe@mailsac.com',
            ]);

        Conference::factory()->count(3)->create();
    }


}
