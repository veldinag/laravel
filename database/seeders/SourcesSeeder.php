<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sources')->insert($this->getData());
    }

    protected function getData(): array
    {
        $faker = Factory::create();
        $data = [];
        for ($i=0; $i<21; $i++) {
            $data[$i] = [
                'name' => $faker->sentence(5),
                'link' => $faker->url(),
                'created_at' => now('Europe/Moscow')
            ];
        }
        return $data;
    }
}
