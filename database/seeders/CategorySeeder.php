<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['category' => 'Teknologi'],
            ['category' => 'Novel'],
            ['category' => 'Pendidikan'],
            ['category' => 'Sejarah'],
            ['category' => 'Agama'],
        ]);
    }
}