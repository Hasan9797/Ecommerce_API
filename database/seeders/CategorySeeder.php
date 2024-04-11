<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(
            [
                'name' => [
                    'uz' => 'Kreslo',
                    'ru' => 'Кресло',
                    'en' => 'Arimchair',
                ],
            ]
        );

        Category::create(
            [
                'name' => [
                    'uz' => 'Stol',
                    'ru' => 'Стол',
                    'en' => 'Table',
                ],
            ]
        );

        Category::create(
            [
                'name' => [
                    'uz' => 'Karavat',
                    'ru' => 'кровать',
                    'en' => 'Bed',
                ],
            ]
        );

        Category::create(
            [
                'name' => [
                    'uz' => 'Sto`l',
                    'ru' => 'Стул',
                    'en' => 'Chair',
                ],
            ]
        );
    }
}
