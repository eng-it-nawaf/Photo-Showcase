<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'cata_1']);
        Category::create(['name' => 'cata_2']);
        Category::create(['name' => 'cata_3']);
    }
}

