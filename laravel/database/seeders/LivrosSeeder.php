<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LivrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livros')->insert([
            'titulo' => 'Ciência da Computação: Uma Visão Abrangente',
            'editora' => 'Bookman',
            'autor' => 'J. Glenn Brookshear',
            'genero' => 'Ciência',
            'nro_paginas' => '576',
        ]);
        DB::table('livros')->insert([
            'titulo' => 'O Verdadeiro Valor de TI',
            'editora' => 'M.Books',
            'autor' => 'Richard Hunter, George Hunter',
            'genero' => 'Ciência',
            'nro_paginas' => '248',
        ]);
        DB::table('livros')->insert([
            'titulo' => 'O projeto fênix – Edição comemorativa: um romance sobre TI, DevOps e sobre ajudar o seu negócio a vencer',
            'editora' => 'Alta Books',
            'autor' => 'Gene Kim, Kevin Behr, George Spafford ',
            'genero' => 'Ciência',
            'nro_paginas' => '432',
        ]);
        DB::table('livros')->insert([
            'titulo' => 'Mulheres que correm com os lobos',
            'editora' => 'Rocco',
            'autor' => 'Clarissa Pinkola Estés',
            'genero' => 'Ciência/Psicanálise',
            'nro_paginas' => '576',
        ]);
        DB::table('livros')->insert([
            'titulo' => 'O Verdadeiro Valor de TI',
            'editora' => 'M.Books',
            'autor' => 'Richard Hunter, George Hunter',
            'genero' => 'Ciência',
            'nro_paginas' => '248',
        ]);
        DB::table('livros')->insert([
            'titulo' => 'Engenharia de Software: Uma Abordagem Profissional',
            'editora' => 'AMGH',
            'autor' => 'Roger S. Pressman, Bruce R. Maxim, Reginaldo Arakaki Julio',
            'genero' => 'Ciência',
            'nro_paginas' => '968',
        ]);
        DB::table('livros')->insert([
            'titulo' => 'O Poder dos Quietos',
            'editora' => 'Agir ',
            'autor' => 'Susan Cain',
            'genero' => 'Autoajuda',
            'nro_paginas' => '352',
        ]);
        DB::table('livros')->insert([
            'titulo' => 'Risque esta palavra',
            'editora' => 'Companhia das Letras',
            'autor' => 'Ana Martins Marques, Kiko Farkas',
            'genero' => 'Ficção',
            'nro_paginas' => '120',
        ]);
        DB::table('livros')->insert([
            'titulo' => 'O milagre da manhã: O segredo para transformar sua vida (antes das 8 horas)',
            'editora' => 'BestSeller',
            'autor' => 'Hal Elrod',
            'genero' => 'Autoaajuda',
            'nro_paginas' => '196',
        ]);        
    }
}
