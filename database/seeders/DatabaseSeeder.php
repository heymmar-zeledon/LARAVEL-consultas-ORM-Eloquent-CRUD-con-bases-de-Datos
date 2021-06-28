<?php

namespace Database\Seeders;

use App\Models\Aula;
use App\Models\Clase;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Aula::factory(10)->create();
        Clase::factory(10)->create();
        $this->call(ProfesorSeeder::class);
    }
}
