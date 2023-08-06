<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catDataSet = [
            ['name' => "Sample Cat 01"],
            ['name' => "Sample Cat 02"],
            ['name' => "Sample Cat 03"],
            ['name' => "Sample Cat 04"],
            ['name' => "Sample Cat 05"],
            ['name' => "Sample Cat 06"],
            ['name' => "Sample Cat 07"],
            ['name' => "Sample Cat 08"],
            ['name' => "Sample Cat 09"],
            ['name' => "Sample Cat 10"],
            ['name' => "Sample Cat 11"],
            ['name' => "Sample Cat 12"],
        ];
        foreach ($catDataSet as $key => $set) {
            Category::create($set);
        }
    }
}
