<?php

namespace Database\Seeders;

use App\Models\Aula;
use App\Models\Clase;
use App\Models\Profesor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::statement('SET foreign_key_checks=0');
        Aula::factory(3)->create();
        Clase::factory(5)->create();
        Profesor::factory(8)->create();
        DB::table('profesor_clase_aula')->truncate();
        DB::statement('SET foreign_key_checks=1');

        /*
        $Arr = array();
        $Profesors = Profesor::all();
        foreach($Profesors as $profesor)
        {
            $A = Aula::all();
            $C = Clase::all();

            foreach($A as $Aul)
            {
                $Res = $Aul->id;
                array_push($Arr,$Res);
            }

            $n = count($Arr);
            $rand = mt_rand(0,$n-1);

            $item = $Arr[$rand];
            $profesor->aulas()->attach($item);
            $item2 = $Arr[$rand];
            if($item2 != $item)
            {
                $profesor->aulas()->attach($item2);
            }

            $Arr = array();

            foreach($C as $Clas)
            {
                $Res = $Clas->id;
                array_push($Arr,$Res);
            }
            $item = $Arr[$rand];
            $profesor->clases()->attach($item);
            $item2 = $Arr[$rand];
            if($item2 != $item)
            {
                $profesor->clases()->attach($item2);
            }
        }*/
    }
}
