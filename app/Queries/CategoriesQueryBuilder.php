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
}
