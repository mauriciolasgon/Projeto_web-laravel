<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Usuarios;

class usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        usuario::create([
            "title"=> "prova",
            "description" => "opa",
            "scheduleto" => "23/12/2002"
        ]);

        usuario::create([
            "title"=> "prova",
            "description" => "opa",
            "scheduleto" => "23/12/2002"
        ]);
        //
    }
}
