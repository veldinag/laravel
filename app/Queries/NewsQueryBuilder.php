<?php

declare(strict_types=1);

namespace App\Queries;

use App\Models\News;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

final class NewsQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = News::query();
    }

    public function getNews(string $page = 'admin'): LengthAwarePaginator
    {
        if ($page === 'admin') {
            $items_on_page = 'pagination.admin.news';
        } else {
            $items_on_page = 'pagination.news';
        }
        return $this->model
        ->with('category')
            ->order()
                ->paginate(config($items_on_page));
    }

    public function getNewsByCategoryId($id): LengthAwarePaginator
    {
        return $this->model
            ->with('category')
                ->where('category_id', $id)
                    ->order()
                        ->paginate(config('pagination.news'));
    }

    public function getNewsById($id)
    {
        return $this->model
            ->with('category')
                ->where('id', $id)
                    ->get();
    }

    public function getNewsIdByLink(string $link)
    {
        return $this->model
            ->where('link', $link)
                ->value('id');
    }

    public function addNews(array $news, int $category_id, int $source_id)
    {
        $count_news = 0;
        foreach ($news as $item) {
            if($this->getNewsIdByLink($item['link']) > 0) {
                break;
            } else {
                $categoriesBuilder = new CategoriesQueryBuilder;
                if ($item['category'] !== null) {
                    $cat_id = $categoriesBuilder->getCategoryIdByTitle($item['category']);
                    if($cat_id > 0) {
                        $category_id = $cat_id;
                    } else {
                        $data = [
                            'title' => $item['category'],
                            'description' => $item['category']
                        ];
                        $category = $categoriesBuilder->create($data);
                        $category_id = $category['id'];
                    }
                }
                $this->create([
                    'category_id' => $category_id,
                    'source_id' => $source_id,
                    'title' => $item['title'],
                    'link' => $item['link'],
                    'description' => $item['description'],
                    'created_at' => $item['pubDate']
                ]);
                $count_news++;
            }
        }
        return $count_news;
    }

    public function create(array $data): News|bool
    {
        return News::create($data);
    }

    public function update(News $news, array $data): bool
    {
        return $news->fill($data)->save();
    }
}
