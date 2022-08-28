<?php

namespace Database\Seeders;

use App\Models\News;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('categories')->insert($this->getData());
    }

    protected function getData(): array
    {
        $faker = Factory::create();
        $created_at = now('Europe/Moscow');
        return [
            [
                'title' => 'Politics',
                'description' => $faker->text(100),
                'created_at' => $created_at
            ],
            [
                'title' => 'Society',
                'description' => $faker->text(100),
                'created_at' => $created_at
            ],
            [
                'title' => 'Economy',
                'description' => $faker->text(100),
                'created_at' => $created_at
            ],
            [
                'title' => 'Culture',
                'description' => $faker->text(100),
                'created_at' => $created_at
            ],
            [
                'title' => 'Sport',
                'description' => $faker->text(100),
                'created_at' => $created_at
            ],
            [
                'title' => 'Technologies',
                'description' => $faker->text(100),
                'created_at' => $created_at
            ]
        ];
    }
}
