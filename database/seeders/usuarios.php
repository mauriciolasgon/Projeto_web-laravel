<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\User;

class usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>"Mauricio",
            'identificador'=>0,
            'RA/RP'=>22000829,
            'filmes'=>"Barbie;Jhon_Wick;Barbie2",
            'email'=>"mauricio@gmail.com",
            'password'=>"$2y$10$mczV2JKV1bFt5O.yUqUv2u4DfJvBr9GgZN1xG4kg66bx3NTcZUKtS",
        ]);

        User::create([
            "name"=>"Murilo",
            'identificador'=>0,
            'RA/RP'=>87654321,
            'filmes'=>"Barbie2;Baby_drive;Velozes_e_furiosos",
            'email'=>"murilo@gmail.com",
            'password'=>"$2y$10$ZVa4t6jIOzhP9iNGjRAdMOKIxIpTJfoXd4zknYypPoPv8hVvYKjw.",
        ]);
        
        User::create([
            "name"=>"Gustavo",
            'identificador'=>0,
            'RA/RP'=>12365479,
            'filmes'=>"Tropa_de_elite;Barbie4;Baby_drive",
            'email'=>"gustavo@hotmail.com",   
            'password'=>4567,
        ]);
        User::create([
            "name"=>"André",
            'identificador'=>0,
            'RA/RP'=>54645213,
            'filmes'=>"Barbie3;Velozes_e_furiosos;Baby_drive",
            'email'=>"andre@gmail.com",
            'password'=>3153,
        ]);
        User::create([
            "name"=>"Xastre",
            'identificador'=>1,
            'RA/RP'=>12345678,
            'email'=>"xastre@gmail.com",
            'password'=>"$2y$10$UYUnuG8P0hwfsSpVfKj0OOp9KHeIcDMHsQ9VxMXfQd3VbpOubqWBK",
        ]);
        User::create([
            "name"=>"Panain",
            'identificador'=>1,
            'RA/RP'=>153553,
            'email'=>"panain@gmail.com",
            'password'=>5646,
        ]);
        User::create([
            "name"=>"Miro",
            'identificador'=>1,
            'RA/RP'=>45689,
            'email'=>"miro@gmail.com",
            'password'=>65446,
        ]);
       User::create([
            "name"=>"Sérgio",
            'identificador'=>1,
            'RA/RP'=>326598,
            'email'=>"segio@gmail.com",
            'password'=>6549,
        ]);
        //
    }
}
