<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            'name' => 'Le roi lion',
            'citation1' => 'Simba',
            'citation2' => 'Hyene',
            'citation3' => 'Mufasa',
            'citation4' => 'Lion',
            'citation5' => 'JSP',
        ]);

        DB::table('movies')->insert([
            'name' => 'Star wars',
            'citation1' => 'Je suis ton père',
            'citation2' => 'Je suis ton géniteur',
            'citation3' => "J'ai transmis la moitié de mon ADN a toi",
            'citation4' => "Je suis l'un de tes 2 parents",
            'citation5' => 'Je suis ton daron',
        ]);
    }
}
