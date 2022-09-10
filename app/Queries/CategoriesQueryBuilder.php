<?php

namespace App\Queries;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;

class CategoriesQueryBuilder
{
    private Builder $model;

    public function __construct()
    {
        $this->model = Category::query();
    }

    public function getCategories()
    {
        return $this->model->get();
    }

    public function create(array $data): Category|bool
    {
        return Category::create($data);
    }
    public function getCategoryIdByTitle(string $title): int|null
    {
        return $this->model
            ->where('title', $title)
                ->value('id');
    }
}
