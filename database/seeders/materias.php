<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Materia;

class materias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materia::create([
            "materias"=>"OSC",
            "alunos"=>"Mauricio;Murilo;Gustavo;André",
            "professores"=>"Panain",
        ]);

        Materia::create([
            "materias"=>"Projeto web",
            "alunos"=>"Mauricio;Murilo;Gustavo;André",
            "professores"=>"Xastre",
        ]);
        Materia::create([
            "materias"=>"Cálculo",
            "alunos"=>"Mauricio;Murilo;Gustavo;André",
            "professores"=>"Miro",
        ]);
        Materia::create([
            "materias"=>"Teologia",
            "alunos"=>"Mauricio;Murilo;Gustavo;André",
            "professores"=>"Anderson",
        ]);
        Materia::create([
            "materias"=>"Fundamentos ",
            "alunos"=>"Mauricio;Murilo;Gustavo;André",
            "professores"=>"Xastre",
        ]);
        Materia::create([
            "materias"=>"Robótica",
            "alunos"=>"Mauricio;Murilo;Gustavo;André",
            "professores"=>"Sérgio",
        ]);
    }
}
