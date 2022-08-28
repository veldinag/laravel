<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\News;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('news')->insert($this->getData());
    }

    protected function getData(): array
    {
        $faker = Factory::create();
        $data = [];
        for ($i=0; $i<120; $i++) {
            $data[$i] = [
                'category_id' => rand(1, 6),
                'source_id' => rand(1, 20),
                'title' => $faker->jobTitle(),
                'author' => $faker->userName(),
                'image' => $faker->imageUrl(),
                'status' => News::DRAFT,
                'description' => $faker->sentence(25),
                'text' => $faker->text(1000),
                'created_at' => now('Europe/Moscow')
            ];
        }
        return $data;
    }
}
