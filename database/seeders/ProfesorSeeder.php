<?php

namespace Database\Seeders;
use App\Models\Profesor;
use Illuminate\Database\Seeder;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profesores = Profesor::factory(6)->create();
        foreach($profesores as $profesor)
        {
            $n = mt_rand(1,4);
            $m = mt_rand(1,5);
            $profesor->clases()->attach($n,['aula_id'=> $m]);
            $n = mt_rand(4,10);
            $m = mt_rand(5,9);
            $profesor->clases()->attach($n,['aula_id'=> $m]);
        }
    }
}
