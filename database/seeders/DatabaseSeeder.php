<?php

namespace Database\Seeders;

use App\Models\Regime;
use App\Models\User;
use App\Models\Client;
use App\Models\Counter;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Client::factory(80)->create();

        

    }
}
