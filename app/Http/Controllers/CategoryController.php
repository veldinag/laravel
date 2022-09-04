<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Queries\CategoriesQueryBuilder;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(CategoriesQueryBuilder $builder) {
        $categories = $builder->getCategories();
        return view('categories.index', [
            'categoriesList' => $categories
        ]);
    }
}
