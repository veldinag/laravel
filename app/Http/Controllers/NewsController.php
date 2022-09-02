<?php

namespace App\Http\Controllers;

use App\Queries\NewsQueryBuilder;

class NewsController extends Controller
{
    public function index(int $id, NewsQueryBuilder $builder) {
        if ($id == 0) {
            $news = $builder->getNews('not_admin');
        } else {
            $news = $builder->getNewsByCategoryId($id);
        }
        return view('news.index', [
            'newsList' => $news
        ]);
    }

    public function show(int $id, NewsQueryBuilder $builder) {
        $news = $builder->getNewsById($id);
        return view('news.show', [
            'news' => $news[0]
        ]);
    }
}
