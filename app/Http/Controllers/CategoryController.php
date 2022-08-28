<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = app(Category::class)->getCategories();
        return view('categories.index', [
            'categoriesList' => $categories
        ]);
    }
}
