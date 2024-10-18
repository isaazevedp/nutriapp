<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Desperdicio extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['data' => '2023-10-01', 'escola' => 'Ensino Fundamental', 'quantidade' => 12.5, 'descricao' => 'Restos de frutas e verduras', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-02', 'escola' => 'Ensino Médio', 'quantidade' => 8.0, 'descricao' => 'Pão e bolachas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-03', 'escola' => 'Senai', 'quantidade' => 5.0, 'descricao' => 'Refeição não consumida', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-04', 'escola' => 'Ensino Fundamental', 'quantidade' => 10.0, 'descricao' => 'Arroz e feijão', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-05', 'escola' => 'Ensino Médio', 'quantidade' => 15.3, 'descricao' => 'Restos de carne', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-06', 'escola' => 'Senai', 'quantidade' => 7.0, 'descricao' => 'Sobras de salada', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-07', 'escola' => 'Ensino Fundamental', 'quantidade' => 6.5, 'descricao' => 'Iogurtes vencidos', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-08', 'escola' => 'Ensino Médio', 'quantidade' => 11.2, 'descricao' => 'Frutas não consumidas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-09', 'escola' => 'Senai', 'quantidade' => 9.4, 'descricao' => 'Restos de massa', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-10', 'escola' => 'Ensino Fundamental', 'quantidade' => 4.8, 'descricao' => 'Sopa não consumida', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-11', 'escola' => 'Ensino Médio', 'quantidade' => 13.0, 'descricao' => 'Bebidas não consumidas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-12', 'escola' => 'Senai', 'quantidade' => 3.5, 'descricao' => 'Doces e sobremesas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-13', 'escola' => 'Ensino Fundamental', 'quantidade' => 2.1, 'descricao' => 'Restos de pizza', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-14', 'escola' => 'Ensino Médio', 'quantidade' => 20.0, 'descricao' => 'Lanches não consumidos', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-15', 'escola' => 'Senai', 'quantidade' => 14.7, 'descricao' => 'Restos de torta', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-16', 'escola' => 'Ensino Fundamental', 'quantidade' => 9.9, 'descricao' => 'Restos de legumes', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-17', 'escola' => 'Ensino Médio', 'quantidade' => 8.8, 'descricao' => 'Sobras de lanche', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-18', 'escola' => 'Senai', 'quantidade' => 11.5, 'descricao' => 'Frutos do mar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-19', 'escola' => 'Ensino Fundamental', 'quantidade' => 7.2, 'descricao' => 'Restos de sobremesas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-20', 'escola' => 'Ensino Médio', 'quantidade' => 5.5, 'descricao' => 'Saladas não consumidas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-21', 'escola' => 'Senai', 'quantidade' => 4.0, 'descricao' => 'Salgadinhos', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-22', 'escola' => 'Ensino Fundamental', 'quantidade' => 6.0, 'descricao' => 'Restos de comida', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-23', 'escola' => 'Ensino Médio', 'quantidade' => 8.3, 'descricao' => 'Pães amanhecidos', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-24', 'escola' => 'Senai', 'quantidade' => 10.8, 'descricao' => 'Legumes cozidos', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-25', 'escola' => 'Ensino Fundamental', 'quantidade' => 9.1, 'descricao' => 'Bebidas em excesso', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-26', 'escola' => 'Ensino Médio', 'quantidade' => 12.0, 'descricao' => 'Frutas estragadas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-27', 'escola' => 'Senai', 'quantidade' => 3.3, 'descricao' => 'Doces', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-28', 'escola' => 'Ensino Fundamental', 'quantidade' => 14.4, 'descricao' => 'Restos de prato principal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-29', 'escola' => 'Ensino Médio', 'quantidade' => 7.6, 'descricao' => 'Sopa', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-30', 'escola' => 'Senai', 'quantidade' => 18.1, 'descricao' => 'Lanches', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['data' => '2023-10-31', 'escola' => 'Ensino Fundamental', 'quantidade' => 6.7, 'descricao' => 'Alimentos congelados', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // Adicione mais linhas conforme necessário
        ];

        DB::table('desperdicios')->insert($data);

    }
}
