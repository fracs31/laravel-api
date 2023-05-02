<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology; //model
use Illuminate\Support\Str; //str

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ["HTML", "CSS", "JavaScript", "Bootstrap", "Vue", "PHP", "MySQL", "Laravel"]; //tecnologie del progetto
        //Ciclo
        foreach ($technologies as $technology) {
            $newTechnology = new Technology(); //nuova tecnologia
            $newTechnology->name = $technology; //nome
            $newTechnology->slug = Str::slug($technology); //slug
            $newTechnology->save(); //invio i dati al database
        }
    }
}
