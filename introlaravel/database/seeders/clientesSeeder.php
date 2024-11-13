<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([[
            'nombre' => 'Juan',
            'apellido' => 'Perex',
            'correo' => 'Juan@gmail.com',
            'telefono' => '12345678',
        ],[
            'nombre' => 'Vero',
            'apellido' => 'Hernández',
            'correo' => 'Vero@gmail.com',
            'telefono' => '12398765',
        ],[
            'nombre' => 'Kevin',
            'apellido' => 'Torres',
            'correo' => 'Kevin@gmail.com',
            'telefono' => '68282937',
        ],[
            'nombre' => 'Majo',
            'apellido' => 'Cruz',
            'correo' => 'Majo@gmail.com',
            'telefono' => '12312345',]]);
    }
}
