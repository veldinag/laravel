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

    public function create(array $data): News|bool
    {
        return News::create($data);
    }

    public function update(News $news, array $data): bool
    {
        return $news->fill($data)->save();
    }
}
