<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getCategories(): array
    {
        return ['Show all', 'Politics', 'Society', 'Economy', 'Culture', 'Sport', 'Technologies'];
    }

    public function getNews(): array
    {
        $news = [];
        $faker = Factory::create();
        $categories = $this->getCategories();

        $j = 1;

        for($i=1; $i<37; $i++) {
            $news[$i] = [
                'title' => $faker->jobTitle(),
                'author' => $faker->userName(),
                'status' => 'DRAFT',
                'description' => $faker->text(100),
                'text' => $faker->text(1000),
                'created_at' => now('Europe/Moscow'),
                'category_id' => $j,
                'category' => $categories[$j]
            ];
            $j++;
            if ($j > 6) $j = 1;
        }

        return $news;
    }

    public function getNewsById(int $id): array
    {
        $news = $this -> getNews();
        return $news[$id];
    }

    public function getNewsByCategory(int $id): array
    {
        $news = $this -> getNews();
        $result = [];
        $i=1;
        foreach ($news as $item) {
            if ($item['category_id'] == $id) {
                $result[$i] = $item;
                $i++;
            }
        }
        return $result;
    }
}
