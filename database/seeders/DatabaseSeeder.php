<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $rooms = [
            [
                'endereco' => 'Rua das Flores, nº1, Rio de Janeiro',
                'telefone' => '(21) 1472-1472',
                'limit_partic' => 100,
                'func_inicio' => '10:00',
                'func_final' => '18:00',
            ],
            [
                'endereco' => 'Rua das Bromélias, nº2, Rio de Janeiro',
                'telefone' => '(21) 2121-1212',
                'limit_partic' => 150,
                'func_inicio' => '18:00',
                'func_final' => '23:00',
            ],
            [
                'endereco' => 'Rua das Frutas, nº3, Rio de Janeiro',
                'telefone' => '(21) 1472-1472',
                'limit_partic' => 200,
                'func_inicio' => '12:00',
                'func_final' => '20:00',
            ],
            [
                'endereco' => 'Rua dos aneis, nº4, Rio de Janeiro',
                'telefone' => '(21) 2125-8098',
                'limit_partic' => 500,
                'func_inicio' => '14:00',
                'func_final' => '22:00',
            ],
            [
                'endereco' => 'Rua Silva, nº5, Rio de Janeiro',
                'telefone' => '(21) 2514-1370',
                'limit_partic' => 100,
                'func_inicio' => '12:00',
                'func_final' => '20:00',
            ],
            [
                'endereco' => 'Rua dos aneis, nº6, Rio de Janeiro ',
                'telefone' => '(21) 1515-1221',
                'limit_partic' => 80,
                'func_inicio' => '13:00',
                'func_final' => '21:00',
            ],
            [
                'endereco' => 'Rua Maravilhosa, nº7, Rio de Janeiro ',
                'telefone' => '(21)9899-8212',
                'limit_partic' => 80,
                'func_inicio' => '15:00',
                'func_final' => '23:00',
            ],

        ];

        foreach ($rooms as $item) {
            DB::table('space')->insert($item);
        }
    }
}